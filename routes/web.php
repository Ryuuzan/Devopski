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
Route::get('/', 'PagesController@home');


Route::get('/contact', 'PagesController@contact');
Route::get('/products', 'PagesController@produits');
Route::get('/products/ficheproduits', 'PagesController@ficheproduits');
Route::get('/authentification', 'PagesController@authentification');
Route::post('/authentification', 'PagesController@authentification');
Route::get('/profil', 'PagesController@profil');
Route::post('/profil', 'PagesController@profil');