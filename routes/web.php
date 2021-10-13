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
Route::view('/', 'home')->name('home');
Route::view('/card1', 'card1')->name('card1');
Route::view('/card2', 'card2')->name('card2');
Route::view('/card3', 'card3')->name('card3');
Route::view('/card4', 'card4')->name('card4');
Route::view('/card5', 'card5')->name('card5');
Route::view('/cardF', 'cardF')->name('cardF');



