<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index() {
    	$threads = DB::select('select * from threads');

    	return view('threads.index', compact('threads'));
    }

    public function create() {
    	$tasks = [
    		['title' => 'Fara ut i bud', 'complete' => true, 'anchor' => 'https://www.bonus.is'],
    		['title' => 'Klara heimanam', 'complete' => false, 'anchor' => 'https://www.google.is'],
    		['title' => 'Kaupa mjolk', 'complete' => true, 'anchor' => 'http://www.netto.is'],
    		['title' => 'Fara sofa', 'complete' => false, 'anchor' => 'https://www.ikea.is'],
    		['title' => 'Kaupa nammi', 'complete' => false, 'anchor' => 'http://ungo.is']
    	];

    	return view('threads.create', compact('tasks'));
    }

    public function show($id) {
    	$thread = DB::select('select * from threads where id=?', [$id]);
    	
    	return view('threads.show', compact('thread'));
    }

    public function store() {
    	dd('Store Method');
    }
}
