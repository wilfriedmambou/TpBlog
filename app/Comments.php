<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model

{
    protected $fillable = ['post_id','content']; 
   public function post (){
       return $this->belongTo('App\Post');
   }

}
