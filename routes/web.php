<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;

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

Route::get('landing', function () {
    return view('landing');
});

Route::get('admin', function () {
    return view('login');
});

// Route::get('products',function (){
//     return view('products');
// });

// Route::get('add-product',function (){
//     return view('addproduct');
// });

// Route::get('categories',function (){
//     return view('categories');
// });

Route::get('add-categories',function (){
    return view('addcategories');
});

Route::get('register',function (){
    return view('register');
});

Route::get('login', [HomeController::class, 'userlogin'])->name('login');
Route::get('products', [Homecontroller::class, 'products']);
Route::get('categories', [Homecontroller::class, 'retrivecategories'])->name('retrivecategories');
Route::post('saveproduct', [HomeController::class, 'saveproduct']);
Route::post('savecategory', [HomeController::class, 'savecategory']);
Route::get('add-product',[HomeController::class, 'chooseCategory'])->name('chooseCategory');

Route::get('send-mail',[MailController::class,'index']);
Route::post('saveregistration',[HomeController::class,'saveregistration']);
Route::post('authenticate',[HomeController::class,'authenticate']);
Route::get('',[HomeController::class,'landing']);
Route::get('logout',[HomeController::class,'logout'])->name('logout');

//Ecommerce site Routing----

Route::get('site',function(){
    return view('topbar');
});