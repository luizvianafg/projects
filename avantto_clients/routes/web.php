<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PlaneController;

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
    return view('dashboards.dashboardindex');
});

Route::resource('clientindex', ClientController::class);
Route::get('clientadd', 'ClientController@create');
Route::get('clientindex/{id}/', 'ClientController@show')->name('client.show');
Route::get('clientindex/{id}/edit', 'ClientController@edit')->name('client.edit');

Route::resource('planeindex', PlaneController::class);
Route::get('planeadd', 'PlaneController@create');
Route::get('planeindex/{id}/', 'PlaneController@show')->name('plane.show');
Route::get('planeindex/{id}/edit', 'PlaneController@edit')->name('plane.edit');

Route::resource('landingindex', LandingController::class);
