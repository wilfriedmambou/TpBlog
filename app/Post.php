<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = ['title','content','user_id']; 
     public function comment()
     {
         return $this->hasMany('App\Comments');
     }  
     public function user (){
        return $this->belongsTo('App\User');
    } 
}
