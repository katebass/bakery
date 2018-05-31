<?php 

Route::get('/logout', 'AuthenticationController@destroy')->name('logout');

//Categories
Route::get('/categories/delete/{id}', 'CategoriesController@delete')->name('deletecategory');

Route::view('categories/new', 'categories.new')->name('createcategory');
Route::post('categories/create', 'CategoriesController@create')->name("storecategory");

Route::get('categories/{id}/newitem', 'ItemsController@newSolution')->name('createitem');
Route::post('categories/{id}/createitem', 'ItemsController@create')->name("storeitem");