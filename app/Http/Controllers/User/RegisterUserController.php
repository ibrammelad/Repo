<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{

    public function loginUserPage()
    {
        return view('User.loginUser');
    }


    public function loginUser(LoginRequest $request)
    {
        $credentials = $request->except("_token");
        if (Auth::guard('user')->attempt($credentials)) {
            return redirect()->route('HomePage');
        }
        else{
            return back()->with([
                'error' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}
