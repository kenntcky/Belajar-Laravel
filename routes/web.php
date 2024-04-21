<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return 'Login page';
});

Route::redirect('/home', '/login');

Route::fallback(function () {
    return '404 Not Found';
});


Route::view('/new', 'new' ,['name' => 'kenntcky', 'site' => 'buku tamu :vos']);

Route::get('/newer', function () {
    return view('new', ['name' => 'kenntcky', 'site' => 'buku tamu :vos']);
});

Route::view('/transaction', 'shop.transaction', ['price' => '$9999']);

Route::get('/marketplace/{category?}/{id?}', function ($category = null, $id = null) {
    return view('shop.marketplace', ['productCategory' => $category, 'productId' => $id]);
})->where('id', '[0-9]+');

Route::get('/marketplace/conflict', function () {
    return 'Routing conflict, uses the first route made.'; // will not execute.
});
