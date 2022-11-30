<?php

use App\Http\Controllers\layout;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [layout ::class,'index']);

Route::controller(layout::class)->group(function(){
    Route::get('/admin/table','home');
    Route::get('/admin/main','index');
    Route::get('/admin/data-tables','data');
});

Route::get('/admin/home', function () {
    return view('admin/home');
});
