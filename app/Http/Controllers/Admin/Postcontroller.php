<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.show',compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required',
            'slug'=>'required',
            
             ]);
             
             Post::create([
                'title'=>request('title'),
                 'content'=>request('body'),
                 'user_id'=>auth()->id(),
                 'slug'=>request('slug'),
                //  'category_id'=>1
                 ]);

                 return redirect(route('post.index'));
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post= Post::where('id',$id)->first();
        return view('admin.post.edit',compact('post'));
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required',
            'slug'=>'required',
            
             ]);  
             $post = Post::find($id);
          
                $post->title=request('title');
                 $post->content=request('body');
                //  $post->user_id=auth()->id();
                 $post->slug=request('slug');
             $post->save();
               
             return redirect (route('post.index'));
                  
                //  return view('admin.post.show');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id',$id)->delete();
        return redirect()->back();
    }
}

