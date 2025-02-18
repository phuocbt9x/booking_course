<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function uploadImage(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('file');

        $path = $image->store('contents', 'post');

        return response()->json([
            'url' => asset('storage/posts/' . $path)
        ]);
    }

}
