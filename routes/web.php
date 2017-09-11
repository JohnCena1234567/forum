<?php

Auth::routes();

Route::get('/threads', function() {
	return view('threads.index');
});

Route::get('/threads/create', function() {
	return view('threads.create');
});

Route::get('/', function() {
	$name = "Artur";
	return view('messages.hello', compact('name'));
});

Route::get('/greeting/{id}/{count}', function($id, $count) {
	return view('messages.greeting', compact('id', 'count'));
})->where(['id' => '[0-9]+', 'count' => '[0-9]+']);