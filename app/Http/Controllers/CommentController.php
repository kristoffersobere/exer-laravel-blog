<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;
use Session;
use Auth;

class CommentController extends Controller
{
     function store(Request $request){
    	$comment = new Comment();
    	$comment->content = $request->comments;
    	$comment->article_id = $request->artid;
    	$comment->user_id = Auth::user()->id;
    	$comment->save();

    	return redirect('/articles');
    }
}
