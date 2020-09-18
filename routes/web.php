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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/view-equipment', 'EquipmentController@index');
Route::post('/add-equipment', 'EquipmentController@storee');

Route::get('/new-category', 'CategoryController@index');
Route::post('/add-category', 'CategoryController@storee');

Route::get('/high-pressure-water-pump', 'LogbookController@index');
Route::post('/add-waterpump', 'LogbookController@storewater');

Route::get('/high-pressure-lines', 'LogbookController@index1');
Route::post('/add-pressurelines', 'LogbookController@storelines');

Route::get('/hand-lance-gun', 'LogbookController@index2');
Route::post('/add-gun', 'LogbookController@storegun');

Route::get('/rotatary-nozzles', 'LogbookController@index3');
Route::post('/add-nozzles', 'LogbookController@storenozzles');

Route::get('/track-maintenance', 'LogbookController@index4');
Route::get('/track-inspection', 'LogbookController@index5');