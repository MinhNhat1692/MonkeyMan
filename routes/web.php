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

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/media/manager', 'MediaController@index')->middleware('auth');

Route::get('/media/upload', 'MediaController@upload')->middleware('auth');

Route::post('/media/intervention-image-upload', 'MediaController@ResizeStore')->middleware('auth');

Route::get('/media/GetAll','MediaController@GetAll')->middleware('auth');

Route::get('/', 'DynamicCyloController@getSlugCombine');

Route::get('/{slug1}/{slug2}/{slug3}/{slug4}/{slug5}', 'DynamicCyloController@getSlugCombine');

Route::get('/{slug1}/{slug2}/{slug3}/{slug4}', 'DynamicCyloController@getSlugCombine');

Route::get('/{slug1}/{slug2}/{slug3}', 'DynamicCyloController@getSlugCombine');

Route::get('/{slug1}/{slug2}', 'DynamicCyloController@getSlugCombine');

Route::get('/{slug1}', 'DynamicCyloController@getSlugCombine');


