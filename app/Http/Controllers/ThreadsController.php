<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Thread;
use App\Comment;
use Validator;
use Input;
use Auth;

class ThreadsController extends Controller {
    public function __construct() {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index() {
        $threads = Thread::orderBy('created_at', 'desc')->get();

    	return view('threads.index', compact('threads'));
    }

    public function create() {
    	return view('threads.create');
    }

    public function show($id) {
        $thread = Thread::find($id);
        $comments = Comment::where('thread_id', '=', $id)->get();
    	
    	return view('threads.show', compact('thread', 'comments'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|max:40',
            'body' => 'required'
        ]);

        Thread::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id()
        ]);

        return redirect('/threads');
    }
}
