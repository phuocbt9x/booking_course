<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('layouts.blog.index');
    }

    public function detail()
    {
        return view('layouts.blog.detail');
    }
}
