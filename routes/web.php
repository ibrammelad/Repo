<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/////////////////////////////// a single action controller ///////////////////////////////
Route::post('custom-login', \App\Http\Controllers\LoginAdminController::class)->name('loginAdmin');
/////////////////////////////// a single action controller ////////////////////////////////////////////

/////////////////////////////////////RegisterAdminController//////////////////////////////////////////////////////
Route::controller(\App\Http\Controllers\RegisterAdminController::class)->group(function (){
    Route::get('login',  'getLoginPage')->name('getLoginPage');
    Route::get('/',  'dashboard')->name('dashboard');
});
/////////////////////////////////////RegisterAdminController//////////////////////////////////////////////////////


Route::middleware('auth')->group(function () {


//////////////////////////////////////LanguageController/////////////////////////////////////////////////////
    Route::controller(\App\Http\Controllers\LanguageController::class)
        ->group(function () {
            Route::get('/languages', 'showLanguages')->name('showLanguages');
            Route::get('/addLanguages', 'addLanguage')->name('Language');
            Route::post('/saveLanguages', 'storeLanguage')->name('saveLanguage');
        });
///////////////////////////////////////LanguageController////////////////////////////////////////////////////

//////////////////////////////////////ProductController/////////////////////////////////////////////////////
    Route::controller(\App\Http\Controllers\ProductController::class)
        ->group(function () {
            Route::get('/products', 'showProducts')->name('showProducts');
            Route::get('/addProducts', 'addProduct')->name('Product');
            Route::post('/saveProduct', 'storeProduct')->name('saveProduct');
        });
////////////////////////////////////////ProductController///////////////////////////////////////////////////

/////////////////////////////////////AdminController//////////////////////////////////////////////////////
    Route::controller(\App\Http\Controllers\AdminController::class)
        ->group(function () {
            Route::get('/admins', 'showAdmins')->name('showAdmins');
            Route::get('/addAdmin', 'addAdmin')->name('Admin');
            Route::post('/saveAdmin', 'storeAdmin')->name('saveAdmin');
            Route::get('logout' , 'logout')->name('logoutAdmin');

        });
    ////////////////////////////////////AdminController///////////////////////////////////////////////////////

/////////////////////////////////////RegisterAdminController//////////////////////////////////////////////////////
    Route::get('logout',[\App\Http\Controllers\RegisterAdminController::class ,'logout'])->name('logoutAdmin');
////////////////////////////////////RegisterAdminController///////////////////////////////////////////////////////
});
