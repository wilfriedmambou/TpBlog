

@extends('default')
@section('content')
{{--  --}}

<article class="row" >
        <span class="row col-md-12 slide ">
                <img class="img-responsive" style="overflow:hidden;" src="images/1.jpg" />
        </span>
@foreach ($posts as $post)
    
{{-- ici on inclura la vu des differents posts
    
   elle a ete renvoye pat PostController@index --}}
@include('posts.posts')
@endforeach
</article>
         
@endsection