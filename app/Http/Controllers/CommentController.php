<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;


class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::paginate(10);
        return view('index', compact('comments'));
    }

    public function store(CommentRequest $request)
    {
        Comment::create($request->all());
        return redirect()->route('index');
    }
}
