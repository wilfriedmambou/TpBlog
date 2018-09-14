
@extends('default')
@section('content')
{{-- @if($posts) --}}
<h1> {{ $posts->title}}</h1>

<div class="for-group">{{$posts->content}}  </div>
<hr>

<div class="comments">
    {{-- @if($posts->hasComments()) --}}
    @foreach ($posts->comment as $comment)
    {{-- @foreach($posts as $post ) --}}
    <ul class="list-group">
    <li class="list-group-item">
            {{$comment->created_at->diffForHumans()}} &nbsp;
        <p>
         <strong> 
        
               {{$comment->user->name ? : ''}}
              
         </strong> :
         {{ $comment->content}}
    
        
    </p>
            
    </li>
</ul>
        {{-- @endforeach --}}
    @endforeach
    {{-- @endif --}}
</div>
{{-- ajouter un commentaire sur mes articles --}}
<hr>
@if(Auth::check())

<div class="card">
    <div class="card-block">
         <form method="POST"action="/posts/{{$posts->id}}/comments"> 
             {{ csrf_field() }}
              <div class="form-group">
                    <textarea class="form-control" id="content" rows="3" name="content" ></textarea>
              </div>
              <div class="form-group">
                   <button type="submit" class="btn btn-primary" >Ajouter un Commentaire</button>
                </div>
             
        </form> 
        @include('layout.errors')
    </div>

</div>
 
 @endif
 @if(!Auth::check())
 <div class="card">
     <div class="card-block btn btn-danger">
         Connectez vous pour pouvoir faire un commentaire et et profiter de 
         toutes les option du forum
     </div>
 </div>
 @endif
{{-- {{$comment}} --}}
{{-- @endif  --}}
@endsection 

