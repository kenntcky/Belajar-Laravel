<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\InputController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketplaceController;

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

Route::view('/transaction', 'shop.transaction', ['price' => '$9999'])
->name('transaction.detail');

Route::get('/marketplace/{category?}/{id?}', [MarketplaceController::class, 'route']
)->where('id', '[0-9]+')->name('marketplace.detail');

Route::get('/marketplace/conflict', function () {
    return 'Routing conflict, uses the first route made.'; // will not execute.
});

Route::get('/hello/{name}', [HelloController::class, 'hello']);

Route::get('/request', [HelloController::class, 'request']);

Route::get('/input', [InputController::class, 'hello']);
Route::post('/input', [InputController::class, 'hello']);
Route::post('/input/nested', [InputController::class, 'helloNested']);
Route::post('/input/all', [InputController::class, 'helloAll']);
Route::post('/input/array', [InputController::class, 'arrayInput']);
