<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AddToCart;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/",[ProductController::class,'index']);

Route::get('products', function () {
    return view('products');
});

Route::get('/index.blade.php', function () {
    return view('index');
});

Route::get('cart.blade.php', function () {
    return view('cart');
});

Route::view('/register','register');
Route::post("/register",[RegisterController::class,'storeUser']);

Route::view('/login', 'login');
Route::post("/login",[LoginController::class, 'login']);

Route::post("add_to_cart",[AddToCart::class,'add_to_cart']);
Route::get("cart",[AddToCart::class,'cartlist']);
Route::get("/remove/{id}",[AddToCart::class,'RemoveFromCart']);
Route::get("/products", [ProductController::class,'productsIndex']);


Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

/*Route::get('register', 'App\Http\Controllers\Auth\RegisterController@register');
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@storeUser')->name('register');*/


/*Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');*/

Route::get('index', 'App\Http\Controllers\Auth\LoginController@home')->name('index');
