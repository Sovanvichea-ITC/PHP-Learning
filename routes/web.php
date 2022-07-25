<?php

use App\Http\Controllers\ItemController;
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

Route::get('/item',[ItemController::class,'index']);
Route::get('/item/post',[ItemController::class,'store']);


Route::get('/', function () {
    return view('welcome');
});