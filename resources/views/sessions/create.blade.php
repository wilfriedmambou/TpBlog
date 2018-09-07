@extends('default')
@section('content')
    <h1> Sign In </h1>
    <form method="POST" action="/login">
        {{ csrf_field() }}
<div class="form-group">
    <label for="email">Email Adresse:</label>
    <input type="email" name="email" id="email" class="form-control">
</div>
<div class="form-group">
        <label for="password">password:</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn-primary"> sign in </button>
    </div>
  @include('layout.errors')
       
    </form>
@endsection