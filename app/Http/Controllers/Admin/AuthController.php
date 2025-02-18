<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    public function index(): View
    {
        return view("auth.login");
    }

    public function login(): RedirectResponse
    {
        return redirect()->route("admin.dashboard");
    }
}
