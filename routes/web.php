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
  $nome = 'Thiago';

  $categories = ['jardinagem', 'eletrodomésticos', 'esportes', 'videogames'];

  return view('welcome', [
    'name' => $nome,
    'categories' => $categories
  ]);
});

Route::get('/profile', function () {
  return view('profile');
});
