<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function show() {
    	$name = "Artur";
		return view('messages.greeting', compact('name'));
    }
}
