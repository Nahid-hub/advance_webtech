<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\pagescontroller;
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
    return view('Welcome');
});
Route::get('/home', [pagescontroller::class, 'home'])->name('home'); 
Route::get('/product', [pagescontroller::class, 'product'])->name('product');
Route::get('/team', [pagescontroller::class, 'team'])->name('team');
Route::get('/contact', [pagescontroller::class, 'contact'])->name('contact');
Route::get('/about', [pagescontroller::class, 'about'])->name('about');

