<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request,$article)
    {
    	//Comment::create(['body' => request('body'),'article_id' => $article->id,'user_id' => $user->id]);$comments = $article->comments()->with('user')->get();$article->save();return back();
    	$comment = new Comment();
    	$comment->body = $request['body'];
    	$comment->user_id = auth()->user()->id;
    	$comment->article_Id = $article;
    	$comment->save();
    	return redirect()->back();
    }
}
