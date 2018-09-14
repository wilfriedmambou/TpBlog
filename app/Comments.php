<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Comments extends Model

{
    protected $fillable = ['post_id','content','user_id']; 
   public function post (){
       return $this->belongsTo('App\Post');
   }
   public function user (){
    return $this->belongsTo('App\User');
}
public function isPublished(){
    return $this->published === 1;

}
public function isDeleted(){
    return $this->delete === 1;

}

}
