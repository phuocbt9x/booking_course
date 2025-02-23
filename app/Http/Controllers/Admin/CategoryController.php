<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\StoreRequest;
use App\Http\Requests\Categories\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    public function __construct(protected Category $category) {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View | Response
    {
        if($request->wantsJson())
        {
            $categories = $this->category
                ->filterByName($request->get("search", null))
                ->filterBySlug($request->get("search", null))
                ->where("activated", true)
                ->paginate(15);

            return response()->json([
                'items' => $categories->items(),
                'more'  => $categories->hasMorePages(),
            ]);
        }

        $categories = $this->category
                        ->filterByName($request->get("key_search", null))
                        ->filterBySlug($request->get("key_search", null))
                        ->orderBy("id", "desc")
                        ->paginate(20);

        return view("admin.categories.index", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view("admin.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->category->create($request->only(['name', 'activated']));
            DB::commit();
            return redirect()->route("admin.categories.index");
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Category
    {
        return $this->category->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = $this->category->findOrFail($id);
        return view("admin.categories.edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        DB::beginTransaction();
        try {
            $this->show($id)->update($request->only(['name', 'activated']));
            DB::commit();
            return redirect()->route("admin.categories.index");
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
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
            $this->show($id)->delete();
            DB::commit();
            return redirect()->route("admin.categories.index");
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withInput();
        }
    }
}
