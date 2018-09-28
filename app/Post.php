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
    // public function hasComments(){
   
    //     $hascom = Post::all();
    //     foreach($hascom->comment as $com){
    //        $numb = $com->count();
    //     }
    // if ( $numb > 1){
    //     return $this->comments()===1;
    // }
    // return $this->comments()===0;
       
    
    // }

}
