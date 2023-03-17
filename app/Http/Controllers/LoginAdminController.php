<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        $credentials = $request->except("_token");
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        return back()->with([
            'errors' => 'The provided credentials do not match our records.',
        ]);
    }
}
