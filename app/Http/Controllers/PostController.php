<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Carbon\Carbon;
use Auth;
use App\Category;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
           $this->middleware('auth')->except(['index','show']);
    }
    public function index(Request $request){
        // on recupere tous les posts de maniere decroissante pour avoir du plus recent en debut
        $posts= Post::latest()->paginate(4);
        // $post = new Post;
        //  dd($post->hasComments());
        // $posts= $posts->whereMonth('created_at','6')->get();
        // ici AUSSI A CE NIVEAU CA MARCHE PAS
        
        // if(request('month')){
        //     $posts->whereMonth('created_at','5');
        // }
        // if($year =request('year') ){
        //  $posts= $posts->whereYear('created_at',$year)->get();;
        //  }

        //  $posts=$posts->get();
         //JUSQUE LA

        // $archives= Post::selectRaw('year(created_at) year,
        //  monthname(created_at)month,count(*) published')
        //  ->groupBy('year','month')
        //  ->orderByRaw('min(created_at) desc')
        //  ->get()
        //  ->toArray(); 
   
        return view('defaultSansBoot',compact('posts'));
    }
    public function show($post){
        $posts = Post::find($post);
        $user = User::find($post);

        // $posts2 = Post::where('','')
        // $posts2= App\User::with(['posts' => function ($query) {
        //     $query->where('title', 'like', '%first%');
        // }])->get();
        // $comments=$posts->comment;
        // $AllUser= Post::all();
        // $list = User::with('post','comment')->paginate(1);
        // $comments = $post->comment()->with('user')->get();

        return view('posts.show',compact('posts','user'));
    }
    public function create(){
        $categories = Category::all();

        

        return view('posts.create',compact('categories'));
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
    // auth()->user()->publish(
    //     new Post(request(['title','content','category_id']))
    // );
    // $posts=Post::with('category')->find(1)
    // // ->where('category_id',request('value'))
    // ->get();
    // 
    // foreach ($posts as $post) {
        //  dd($post->category->id); 
        // echo $book->author->name;
        Post::create([
                'title'=>request('title'),
                 'content'=>request('content'),
                 'user_id'=>auth()->id(),
                 'category_id'=>1
                 ]);
       
    // }
   
         

   
 

      
    // Flashy::success('utilisateur creer avec succes!');
        return redirect('/posts');
    }
}
