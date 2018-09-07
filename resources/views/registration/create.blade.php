@extends('default')
@section('content')
<h1> Register </h1>
<form method="POST" action="/register">

{{ csrf_field() }}
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="votre Nom"required>  
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control"id="email" name="email" placeholder="Votre Email"required>
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
    <button type="submit" class="btn btn-primary"> Enregistrer</button>
</div>
<div class="form-group">
    @include('layout.errors')
</div> 
</form>

@endsection 