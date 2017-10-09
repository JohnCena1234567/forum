<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Thread;
use Validator;
use Input;

class ThreadsController extends Controller
{
    public function index(Request $request) {
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
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:40',
            'body' => 'required|min:20',
        ]);

        if ($validator->fails()) {
            return redirect('/threads/create')->withInput()->withErrors($validator);
        }

    	$thread = new Thread;
        $thread->title = $request->title;
        $thread->body = $request->body;
        $thread->user_id = 1;
        $thread->save();
        return redirect('/threads');
    }
}
