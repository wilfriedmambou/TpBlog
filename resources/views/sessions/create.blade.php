@extends('default')
@section('content')
    <h1> Sign In </h1>
    <meta id ="csrf-token" name="csrf-token" content="{{ csrf_token() }}">
    <form method="POST" action="/login">
        {{ csrf_field() }}
<div class="form-group">
    <label for="email">Email Adresse:</label>
    <input type="email" name="email" id="email" class="form-control" value= "lolo">
</div>
<div class="form-group">
        <label for="password">password:</label>
        <input type="password" name="password" id="password" class="form-control" value = "lalafff"> 1
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn-primary" id="loggin"> sign in </button>
    </div>
  @include('layout.errors')
       
    </form>
    <div id="demo"></div>
@endsection