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

Route::get('/', function () {
    return view('template');
});

Route::get('/index', function () {
    return view('index');
});


Route::get('/blog', 'Artikel@blog')->name('blog');
Route::get('/beach', 'Artikel@beach')->name('beach');
Route::get('/adm', 'Admincontroller@admin')->name('adm');
Route::get('/index', 'Artikel@index')->name('index');
Route::get('/gunung', 'Artikel@gunung')->name('gunung');
Route::get('/Trippackages', 'Artikel@Trippackages')->name('Trippackages');
Route::get('/family', 'Artikel@family')->name('family');
Route::get('/geografi', 'Artikel@geografi')->name('geografi');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
