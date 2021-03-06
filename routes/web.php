<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadXmlController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RssController;
 
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

Route::get('/pokemon', function () {
    return view('pokemon');
});

Route::get('/',[PostController::class, 'index']);