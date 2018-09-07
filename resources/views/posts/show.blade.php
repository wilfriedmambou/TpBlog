 @extends('default')
@section('content')
{{-- @if($posts) --}}
<h1> {{ $posts->title}}</h1>

<div class="for-group">{{$posts->content}}  </div>
<hr>

<div class="comments">
    @foreach ($posts->comment as $comment)
    <ul class="list-group">
    <li class="list-group-item">
         <strong> 
    {{$comment->created_at->diffForHumans()}} &nbsp;
        </strong>
            {{ $comment->content}}
    </li>
</ul>
        
    @endforeach
</div>
{{-- ajouter un commentaire sur mes articles --}}
<hr>
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
{{-- @endif  --}}
@endsection 

