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
    public function roles()
    {
        return $this
            ->belongsToMany('App\Role')
            ->withTimestamps();
    }
    public function publish(Post $post){
           Post::create([
      'title'=>request('title'),
       'content'=>request('content'),
       'user_id'=>auth()->id(),
       'category_id'=> $post->categories->i
       ]);
       

    // autre methode comme user et post on une relation 
    // $this->post()->save($post);

    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];





    // nouvelle methode 
    public function authorizeRoles($roles)
{
  if ($this->hasAnyRole($roles)) {
    return true;
  }
  abort(401, 'This action is unauthorized.');
}
public function hasAnyRole($roles)
{
  if (is_array($roles)) {
    foreach ($roles as $role) {
      if ($this->hasRole($role)) {
        return true;
      }
    }
  } else {
    if ($this->hasRole($roles)) {
      return true;
    }
  }
  return false;
}
public function hasRole($role)
{
  if ($this->roles()->where('name', $role)->first()) {
    return true;
  }
  return false;
}
}
