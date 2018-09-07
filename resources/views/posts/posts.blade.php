{{-- <article  class='row'> --}}
<div class="blog-post col-md-5" style="border-style: solid; margin-right:1px;margin-left:50px;">
<h6 class="blog-post-title">
<a href="/posts/{{$post->id}}"class="thumbnail" >
    {{str_limit($post->title,20)}}
</a>  

</h6>
<p class="blog-post-meta">
    {{$post->user->name}} on  
    {{$post->created_at->toFormattedDateString()}}
</p>
       {{str_limit($post->content, 150)}} 
       <span class="row">
      
       <a href="/posts/{{$post->id}}" class="btn btn-primary">Read more</a>  
</div> 
{{-- </article> --}}
{{-- <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12 ab" >
    <a href="/posts/{{$post->id}}" class="thumbnail">
   
    </a>
   <h2>Etudes</h2> 
    <p>
       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
    </p>
     <a href="#" class="btn btn-primary">Read more</a>
</article>  --}}