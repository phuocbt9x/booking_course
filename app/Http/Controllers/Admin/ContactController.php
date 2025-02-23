<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function __construct(protected Contact $contact) {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $contacts = $this->contact
            ->filterByName($request->get("search", null))
            ->filterByEmail($request->get("search", null))
            ->filterByContent($request->get("search", null))
            ->orderBy("id", "desc")
            ->paginate(20);

        return view("admin.contacts.index", compact("contacts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $this->contact->create($request->except(['_token', '_method']));
            DB::commit();
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        DB::beginTransaction();
        try {
            $contact->update($request->except(['_token', '_method']));
            DB::commit();
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
