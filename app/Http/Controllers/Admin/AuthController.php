<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authenticate\AuthenticateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    public function index(): View
    {
        return view("admin.auth.login");
    }

    public function login(AuthenticateRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->only(["email", "password"]))) {
            return redirect()->route("admin.dashboard");
        }

        return redirect()
            ->back()
            ->withErrors([
                "auth_error" => "Email or password incorrect",
            ])
            ->withInput();

    }
}
