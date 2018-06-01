<?php

Route::get('/','CategoriesController@index')->name('home');

Route::view('/login', 'auth.login')->name('login')->middleware('guest:admin');
Route::post('/login', 'AuthenticationController@login')->name('login-post');

//Categories
Route::get('category/{id}/items', 'CategoriesController@itemList')->name('itemsList');


//Cart
Route::view('/cart', 'cart')->name('cart');

Route::get('items/addtocart/{item}', 'OrdersController@addToCart')->name('addtocart');
Route::get('clearcart', 'OrdersController@clearCart')->name('clearcart');

Route::get('items/deletefromcart/{item}', 'OrdersController@deleteFromCart')->name('deletefromcart');