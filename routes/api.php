<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function () {
    Route::prefix('countries')->group(function () {
        Route::get('/', 'CountryController@index')->name('country.main');
        Route::post('/', 'CountryController@store')->name('country.store');
        Route::get('/{id}', 'CountryController@show')->name('country.show');
        Route::put('/{id}', 'CountryController@update')->name('country.update');
        Route::delete('/{id}', 'CountryController@destroy')->name('country.destroy');
    });

    Route::prefix('states')->group(function () {
        Route::get('/', 'StateController@index')->name('state.main');
        Route::post('/', 'StateController@store')->name('state.store');
        Route::get('/{id}', 'StateController@show')->name('state.show');
        Route::put('/{id}', 'StateController@update')->name('state.update');
        Route::delete('/{id}', 'StateController@destroy')->name('state.destroy');
    });

    Route::prefix('cities')->group(function () {
        Route::get('/', 'cityController@index')->name('city.main');
        Route::post('/', 'cityController@store')->name('city.store');
        Route::get('/{id}', 'cityController@show')->name('city.show');
        Route::put('/{id}', 'cityController@update')->name('city.update');
        Route::delete('/{id}', 'cityController@destroy')->name('city.destroy');
    });
});
