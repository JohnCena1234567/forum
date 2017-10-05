<?php

Auth::routes();

Route::get('/', function() {
	return redirect('/threads');
});

Route::get('/threads', 'ThreadsController@index');
Route::post('/threads', 'ThreadsController@store');
Route::get('/threads/create', 'ThreadsController@create')->middleware('auth');
Route::get('/threads/{id}', 'ThreadsController@show');

Route::get('/profiles/{id}', 'ProfileController@profile');

Route::get('/comments', 'CommentController@index');
Route::post('/comments', 'CommentController@store')->middleware('auth');
Route::get('/comments/{id}', 'CommentController@show')->middleware('auth');
