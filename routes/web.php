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

Route::get('/greeting/{id}', function($id) {
	$a = ['Dobre rano', 'Buon giorno', 'Servus', 'Privet', 'Zdrasti'];

	return view('messages.greeting', ['greeting' => $a[$id]]);
})->where(['id' => '[0-4]']);

