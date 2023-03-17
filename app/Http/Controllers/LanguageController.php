<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLanguageRequest;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function showLanguages()
    {
        $languages = Language::selection()->simplePaginate(4);
        return view('pages.Languages.Languages', compact('languages'));
    }
    public function addLanguage ()
    {
        return view('pages.Languages.addLanguages');
    }
    public function storeLanguage(StoreLanguageRequest $request)
    {
        $input = $request->except("_token");
        $input['img'] = uploadImage('/images' , $request->img);
        Language::create($input);
        return redirect()->route('showProducts')->with(['success' => "language is added "]);
    }
}
