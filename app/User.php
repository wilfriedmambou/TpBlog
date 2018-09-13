<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'];
        // je defini ici la relation qui dit : un utilisateur a un ou plusieurs
        // commentaires je donne le chemain vers le modele commentaire
        /*et en second argument je passe ma cle etrangere */
    public function comment (){
        return $this->hasMany('App\Comments','id');
    }
    public function post (){
        return $this->hasMany('App\Post');
    }
    public function publish(Post $post){
    //        Post::create([
    //   'title'=>request('title'),
    //    'content'=>request('content'),
    //    'user_id'=>auth()->id() ]);

    // autre methode comme user et post on une relation 
    $this->post()->save($post);

    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
