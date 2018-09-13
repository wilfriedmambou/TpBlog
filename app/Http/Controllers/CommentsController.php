<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\Post;
use App\User;
class CommentsController extends Controller
{
    public function store(Post $post){
        $this->validate(request(),['content'=>'required|min:2']);  
      Comments::create([
            'content'=>request('content'),   
            'post_id'=>$post->id,
            'user_id'=>auth()->id()
        ]);
    // dd($comment);
       return back();
    // return view('show',compact('comment'));
    }
}
