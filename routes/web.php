<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GlobalController@index');

Route::post('add-category', 'GlobalController@addCategory');

Route::post('add-product', 'GlobalController@addProduct');

Route::get('manage-category', 'GlobalController@manageCategory');

Route::patch('/update/{product}', 'GlobalController@update');

Route::patch('/category/update/{category}', 'GlobalController@categoryUpdate');

Route::get('/product/{product}/edit', 'GlobalController@edit');

Route::get('/category/{category}/edit', 'GlobalController@categoryEdit');

Route::get('/get-products/{id}', 'GlobalController@getproductsByCategory');

Route::get('/form-category', 'GlobalController@categoryForm');

Route::get('/form-product', 'GlobalController@productForm');

Route::delete('/delete/{product}', 'GlobalController@destroy');

Route::delete('/category/delete/{category}', 'GlobalController@categoryDestroy');