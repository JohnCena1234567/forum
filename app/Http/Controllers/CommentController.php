<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;

class CommentController extends Controller {
    public function __construct() {
        $this->middleware('auth')->only('store');
    }

    public function store($id, Request $request) {
        $this->validate($request, [
            'comment' => 'required'
        ]);

        Comment::create([
            'comment' => $request->comment,
            'user_id' => Auth::id(),
            'thread_id' => $id
        ]);

        return back();
    }
}
