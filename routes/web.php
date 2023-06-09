<?php

use Illuminate\Support\Facades\Route;
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

Route::resource('/v1', ProductController::class);
Route::get('/', [ProductController::class, 'index']);
Route::get('/create', function () {
    return view('create');
});
Route::get('/home', [ProductController::class, 'index']);
