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

Route::get('/logout','Auth\LoginController@logout')->name('logout');
Auth::routes();
Route::get('/',['uses'=>'indexController@index','as' =>'home']);
Route::group(['prefix'=>'/control/admin','middleware'=>'App\Http\Middleware\cmsMiddleware'],function (){

});

Route::get('/home', 'indexController@home');
