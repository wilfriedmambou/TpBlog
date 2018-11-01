<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = ['title','content','user_id','category_id']; 
     public function comment()
     {
         return $this->hasMany('App\Comments');
     }  
     public function user ()
     {
        return $this->belongsTo('App\User');
    } 
    public function category ()
    {
       return $this->belongsTo('App\Category');
   } 
    public function hasComments(){
//    $post=  new Post;

//    $post = Post::where('comment','')->count() ;
// ->where('user_id', auth()->id())
// $user= Post::user->id;

   $comment=Post::comment()->count() > 0;
//    return $post;


return $comment;
    }
    // if ( $numb > 1){
    //     return $this->comments()===1;
    // }
    // return $this->comments()===0;
       
    
    // }
public function isPublished(){
    return $this->published === 1;

}
public function isDeleted(){
    return $this->delete === 1;

}
}
