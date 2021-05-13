<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;



class CommentController extends Controller{

    public function create(CommentRequest $req)
    {
        $comment=new Comment();
        $comment->name=$req->input('name');
        $comment->email=$req->input('email');
        $comment->message=$req->input('message');

        $comment->save();

        return redirect()->route('view_comment')->with('success', 'Коментарий добавлен');
    }
    public function allData(){

        return view('all-comment', ['data'=>Comment::all()]) ;
    }
}
