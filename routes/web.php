<?php

Auth::routes();

Route::get('/threads', function() {
	return view('threads.index');
});

Route::get('/threads/create', function() {
	return view('threads.create');
});