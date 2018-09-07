<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Carbon\Carbon;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
           $this->middleware('auth')->except(['index','show']);
    }
    public function index(Request $request){
        // on recupere tous les posts de maniere decroissante pour avoir du plus recent en debut
        $posts= Post::latest();
        // $posts= $posts->whereMonth('created_at','6')->get();
        
        if(request('month')){
            $posts->whereMonth('created_at','5');
        }
        // if($year =request('year') ){
        //     $posts= $posts->whereYear('created_at',$year)->get();;
        // }

         $posts=$posts->get();

        $archives= Post::selectRaw('year(created_at) year,
         monthname(created_at)month,count(*) published')
         ->groupBy('year','month')
         ->orderByRaw('min(created_at) desc')
         ->get()
         ->toArray(); 
   
        return view('posts.index',compact('posts','archives'));
    }
    public function show($post){
        $posts = Post::find($post);
        // dd($posts);

        return view('posts.show',compact('posts'));
    }
    public function create(){
        

        return view('posts.create');
    }
    public function store(Request $request){
 $this->validate(request(),[
'title'=>'required',
'content'=>'required'
 ]);
    //   $posts=new Post;
    // ici on a utilise la methode create mais on vas creer une methode dans le model
    // afin de l'appeller ici 
    //    Post::create([
    //   'title'=>request('title'),
    //    'content'=>request('content'),
    //    'user_id'=>auth()->id() ]);

    // methode utilisan le modele  
    auth()->user()->publish(
        new Post(request(['title','content']))
    );
      
    Flashy::success('utilisateur creer avec succes!');
        return redirect('/posts');
    }
}
