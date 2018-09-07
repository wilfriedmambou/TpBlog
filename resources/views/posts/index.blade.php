

@extends('default')
@section('content')

@foreach ($posts as $post)
    
{{-- ici on inclura la vu des differents posts
    
   elle a ete renvoye pat PostController@index --}}
@include('posts.posts')
@endforeach
  
         
@endsection