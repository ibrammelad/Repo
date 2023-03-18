<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function __invoke()
    {
        if (!Auth::guard('user')->check()) {
            return redirect()->route('loginUserPage');
        }
        $products = Product::selection()->sort()->simplePaginate(12);
        return view('User.homePage', compact('products'));

    }
}
