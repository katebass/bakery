<?php

Route::get('/','CategoriesController@index')->name('home');

Route::view('/login', 'auth.login')->name('login')->middleware('guest:admin');
Route::post('/login', 'AuthenticationController@login')->name('login-post');

//Categories

Route::get('category/{id}/items', 'CategoriesController@itemList')->name('itemsList');