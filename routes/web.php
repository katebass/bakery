<?php

Route::get('/','CategoriesController@index')->name('home');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', 'AuthenticationController@login')->name('login-post');
Route::get('/logout', 'AuthenticationController@destroy')->name('logout');

//Categories
Route::get('/categories/delete/{id}', 'CategoriesController@delete')->name('deletecategory');
Route::view('categories/new', 'categories.new')->name('createcategory');
Route::post('categories/create', 'CategoriesController@create')->name("storecategory");