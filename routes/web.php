<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
Route::get('/test', function(){

   return view('index');
});

Auth::routes();

Route::get('/index/{users:name}', [App\Http\Controllers\ProfileController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/abc', function(){
//     return 'here';
// })->name('a');

Route::get('/test', [App\Http\Controllers\ProfileController::class, 'show']);
