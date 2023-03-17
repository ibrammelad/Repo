<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class RegisterAdminController extends Controller
{
    public function dashboard()
    {
        if (!Auth::check())
        {
            return  redirect()->route('getLoginPage');
        }
        return view('dashboard');
    }

    public function getLoginPage()
    {
        return view('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('getLoginPage')->with(['sucess' => 'you logout']);
    }


}
