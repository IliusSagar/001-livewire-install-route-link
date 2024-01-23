<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\About;
use App\Http\Livewire\Home;
use App\Http\Livewire\Pages\Cart;
use App\Http\Livewire\Pages\Shop;

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

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/shop', Shop::class);
Route::get('/cart', Cart::class);
