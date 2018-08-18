<?php

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
Route::get('/presentation', function () {
    return view('visitors/presentation');
});
Route::get('/website', function () {
    return view('visitors/website');
});

Auth::routes();



Route::group(['middleware'=>['auth']],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('notes','NoteController');
    Route::resource('recipes','RecipeController');
    Route::resource('ingredients','IngredientController');
    Route::resource('money_periods','MoneyPeriodController');
    Route::get('money_periods/last','MoneyPeriodController@showLast')->name('money_periods.showlast');
});