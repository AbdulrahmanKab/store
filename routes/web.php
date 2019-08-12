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
    Route::get('/','cmsController@index');
    Route::get('/products/add',['uses'=>'admin\productsController@create','as'=>'products.add']);
    Route::post('/products/add/',['uses'=>'admin\productsController@detail','as'=>'products.detail']);
    Route::get('/products/add/product_detail',['uses'=>'admin\productsController@create_detail','as'=>'products.add_detail']);
    Route::post('/products/add/product_detail',['uses'=>'admin\productsController@store','as'=>'products.store']);
    Route::get('/slider/add',['uses'=>'admin\sliderController@create','as'=>'slider.add']);
    Route::post('/slider/add',['uses'=>'admin\sliderController@store','as'=>'slider.store']);
    Route::get('/slider',['uses'=>'admin\sliderController@index','as'=>'slider.index']);
    Route::get("/slider/edite/{id}","admin\sliderController@edite");
    Route::put("/slider/{id}","admin\sliderController@update");
});
Route::get('/product','indexController@product');

Route::get('/home', 'indexController@home');
