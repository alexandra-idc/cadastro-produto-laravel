<?php

Route::get('/', 'SiteController@index');
Route::get('/index', 'SiteController@index');
Route::get('/sobre', 'SiteController@sobre');

Route::get('/gerenciar-produto', 'SiteController@produto');
Route::get('/gerenciar-categoria', 'SiteController@categoria');

Route::get('/create', 'SiteController@create');
Route::get('/createCat', 'SiteController@createCat');

Route::get('/createAdd', 'SiteController@store');
Route::get('/createAddCat', 'SiteController@storeCat');

Route::get('{id}/edit', 'SiteController@edit');
Route::get('{id}/editCat', 'SiteController@editCat');

Route::get('/update', 'SiteController@update');
Route::get('/updateCat', 'SiteController@updateCat');

Route::get('{id}/delete', 'SiteController@delete');
Route::get('{id}/deleteCat', 'SiteController@deleteCat');
