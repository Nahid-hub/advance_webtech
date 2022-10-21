<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Validation;
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
//Registration
Route::get('/registration', [Validation::class, 'registration'])->name('registration'); 
Route::post('/registration',[Validation::class, 'addPeople'])->name('registration');
Route::get('/login',[Validation::class, 'login'])->name('login');
Route::post('/login',[Validation::class, 'loginData'])->name('login');
Route::get('/contact',[Validation::class, 'contact'])->name('contact');
Route::post('/contact',[Validation::class, 'contactUs'])->name('contact');