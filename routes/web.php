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

Route::get('/{slug1}/{slug2}/{slug3}/{slug4}/{slug5}', 'DynamicCyloController@getSlugCombine');

Route::get('/{slug1}/{slug2}/{slug3}/{slug4}', 'DynamicCyloController@getSlugCombine');

Route::get('/{slug1}/{slug2}/{slug3}', 'DynamicCyloController@getSlugCombine');

Route::get('/{slug1}/{slug2}', 'DynamicCyloController@getSlugCombine');

Route::get('/{slug1}', 'DynamicCyloController@getSlugCombine');