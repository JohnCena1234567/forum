<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
    	$threads = [
    		['eigandi' => 'Artur Hirsz', 'title' => 'Laravel controller', 'body' => 'Hvernig byr madur til controller i Laravel?'],
    		['eigandi' => 'Artur Hirsz', 'title' => 'Laravel 5.5', 'body' => 'Hver er munurinn a Laravel 5.4 og 5.5?']
    	];

    	return view('profiles.profile', compact('threads'));
    }
}
