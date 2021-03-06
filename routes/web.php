<?php

Auth::routes();

Route::get('/', function() {
	return redirect('/threads');
});

Route::get('/threads', 'ThreadsController@index');
Route::post('/threads', 'ThreadsController@store');
Route::get('/threads/create', 'ThreadsController@create');
Route::get('/threads/{id}', 'ThreadsController@show');

Route::get('/profiles/{id}', 'ProfileController@profile');

Route::post('/threads/{id}', 'CommentController@store');
