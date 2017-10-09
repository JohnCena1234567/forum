<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Thread;

class ThreadsController extends Controller
{
    public function index(Request $request) {
        return $request->path();

        $threads = Thread::all();

    	return view('threads.index', compact('threads'));
    }

    public function create() {
    	return view('threads.create');
    }

    public function show($id) {
        $thread = Thread::find($id);
        $thread = DB::table('threads')->where('id', $id)->first();
    	
    	return view('threads.show', compact('thread'));
    }

    public function store(Request $request) {
    	$thread = new Thread;
        $thread->title = $request->title;
        $thread->body = $request->body;
        $thread->user_id = 1;
        $thread->save();
        return redirect('/threads');
    }
}
