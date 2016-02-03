<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('item-detail/{id}', 'WelcomeController@ItemDetail');

Route::get('/chill', 'WelcomeController@AllItem');

Route::get('/detail-page/{id}', 'WelcomeController@detail');

Route::get('buy/{id}', 'WelcomeController@ItemForm' );

Route::post('buy/order-save', 'WelcomeController@ItemOrder' );

Route::post('order', 'WelcomeController@ItemOrder' );

Route::post('apply/multiple_upload', 'AdminController@multiple_upload' );

Route::get("dashboard","AdminController@index");

Route::get("item-view","AdminController@viewProduct");

Route::get("item-form","AdminController@itemForm");

Route::post("item-save","AdminController@itemSave");

Route::get("DeleteProduct/{id}","AdminController@delete");

Route::get("EditProduct/{id}","AdminController@edit");

Route::get("DetailProduct/{id}","AdminController@ProductDetail");

Route::post("itemUpdate","AdminController@itemUpdate");

Route::get('imageUploadForm', 'ImageController@upload' );

Route::post('imageUploadForm', 'ImageController@store' );

Route::get('showLists', 'ImageController@show' );



