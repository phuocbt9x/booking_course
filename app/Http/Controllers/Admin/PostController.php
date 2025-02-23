<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\StoreRequest;
use App\Http\Requests\Posts\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PostController extends Controller
{
    public function __construct(protected Post $post, protected Category $category ) {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $posts = $this->post
                    ->filterByName($request->get("search", null))
                    ->filterBySlug($request->get("search", null))
                    ->orderBy("id", "desc")
                    ->paginate(20);

        return view("admin.posts.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = $this->category->all(["id", "name"]);

        return view("admin.posts.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        DB::beginTransaction();
        try {
            if ($request->filled('thumbnail')) {
                $tmpPath = str_replace(Storage::disk('tmp')->url(''), '', $request->thumbnail);

                if (Storage::disk('tmp')->exists($tmpPath)) {
                    Storage::disk('upload')->put($tmpPath, Storage::disk('tmp')->get($tmpPath));
                    Storage::disk('tmp')->delete($tmpPath);
                }

                $request->merge(["thumbnail" =>Storage::disk('upload')->url($tmpPath)]);
            }
            $post = $this->post->create($request->except("categories"));
            $request->mergeIfMissing([
                "created_by" => auth()->id(),
                "created_at" => now(),
                "updated_by" => auth()->id(),
                "updated_at" => now(),
            ]);
            $post->categories()->sync($request->input('categories'));

            DB::commit();
            return redirect()->route("admin.posts.index");
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = $this->post->with("categories")->findOrFail($id);
        return view("admin.posts.edit", compact("post"));
    }

    public function update(UpdateRequest $request, string $id)
    {
        DB::beginTransaction();
        try {
            $post = $this->post->findOrFail($id);
            if ($request->filled('thumbnail')) {
                $oldThumbnailPath = str_replace(Storage::disk('upload')->url(''), '', $post->thumbnail);
                if ($post->thumbnail && Storage::disk('upload')->exists($oldThumbnailPath)) {
                    Storage::disk('upload')->delete($oldThumbnailPath);
                }

                $tmpPath = str_replace(Storage::disk('tmp')->url(''), '', $request->thumbnail);
                if (Storage::disk('tmp')->exists($tmpPath)) {
                    Storage::disk('upload')->put($tmpPath, Storage::disk('tmp')->get($tmpPath));
                    Storage::disk('tmp')->delete($tmpPath);
                }

                $request->merge(["thumbnail" => Storage::disk('upload')->url($tmpPath)]);
            }
            $request->mergeIfMissing([
                "activated" => false,
            ]);
            $post->update($request->except("categories"));
            $post->categories()->sync($request->input('categories'));

            DB::commit();
            return redirect()->route("admin.posts.index");
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            $post = $this->post->findOrFail($id);

            if ($post->thumbnail) {
                $thumbnailPath = str_replace(Storage::disk('upload')->url(''), '', $post->thumbnail);
                if (Storage::disk('upload')->exists($thumbnailPath)) {
                    Storage::disk('upload')->delete($thumbnailPath);
                }
            }

            // $post->categories()->detach();

            $post->delete();

            DB::commit();
            return redirect()->route('admin.posts.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back();
        }
    }
}
