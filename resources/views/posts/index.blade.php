

@extends('default')
@section('content')
<article class="row" >
@foreach ($posts as $post)
    
{{-- ici on inclura la vu des differents posts
    
   elle a ete renvoye pat PostController@index --}}
@include('posts.posts')
@endforeach
</article>
         
@endsection