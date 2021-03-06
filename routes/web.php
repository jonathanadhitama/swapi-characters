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
    return view('welcome');
});

Route::get('/react', function () {
    return view('react');
});

Route::get('/characters_jedi', 'MainController@handleCharactersROTJ');
Route::get('/mammal_homeworlds', 'MainController@handleMammalHomeworlds');
Route::get('/import_characters', 'MainController@importCharacterIntoDB');
Route::get('/update_characters', 'MainController@updateCharacterIntoDB');
Route::get('/create_character', 'MainController@createCharacter');
Route::post('/create_character_submit', 'MainController@createCharacterSubmit');
