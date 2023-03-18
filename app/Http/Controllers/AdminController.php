<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Models\Admin;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function addAdmin()
    {
        $languages = Language::all();
        return view('pages.Admins.addAdmin', compact('languages'));
    }

    public function showAdmins()
    {
        $admins = Admin::selection()
            ->sort()
            ->simplePaginate(8);
        return view('Pages.Admins.Admins',compact('admins'));
    }

    public function storeAdmin(StoreAdminRequest $request)
    {
        $input = $request->except("_token" , "password_confirmation");
        Admin::create($input);
        return redirect()->route('showAdmins')->with(['success' => "Admin is added "]);
    }


}
