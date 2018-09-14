@extends('default')
@section('content')

        @include('sessionFlash')
<h1> Editer </h1>
<form method="POST" action="/user/{{$info->id}}/edit">
    {{$info->id}}
{{ csrf_field() }}
<div class="form-group">
    <label for="name">Nouveau Nom</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="{{$info->name}}"required>  
</div>
<div class="form-group">
    <label for="email">Nouvel Email</label>
<input type="text" class="form-control"id="email" name="email" placeholder="{{$info->email}}"required>
</div>
<div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control"id="password" name="password" placeholder="Votre password"required>
 </div>
    <div class="form-group">
            <label for="password_confirmation">confirm </label>
            <input type="password" class="form-control"id="password_confirmation" name="password_confirmation" placeholder="Votre confirmation"required>
        </div>
<div class="form-group">
    <button type="submit" class="btn btn-primary"> Editer</button>
</div>
<div class="form-group">
   
    @include('layout.errors')
</div> 
</form>
@endsection