<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Language;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        $languages = Language::all();
        return view('pages.Products.addProducts', compact('languages'));
    }

    public function storeProduct(StoreProductRequest $request)
    {
        $input = $request->except("_token");
        $input['img'] = uploadImage('/images', $request->img);
        Product::create($input);
        return redirect()->route('showProducts')->with(['success' => "product is added "]);
    }

    public function showProducts()
    {
        $products = Product::selection()
            ->orderby('created_at' , 'DESC')
            ->simplePaginate(8);
        return view('pages.Products.Products',compact('products'));
    }
}
