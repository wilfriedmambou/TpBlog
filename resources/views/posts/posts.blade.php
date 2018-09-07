<div class="blog-post">
<h2 class="blog-post-title">
<a href="/posts/{{$post->id}}" >
    {{$post->title}}
</a>  
{{-- @if(Session::has('notification.message')) --}}

  
{{-- @include('sessionFlash') --}}
{{--   --}}
</h2>
<p class="blog-post-meta">
    {{$post->user->name}} on  
    {{$post->created_at->toFormattedDateString()}}
</p>
         {{$post->content}}
        
</div> 
            