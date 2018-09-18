{{-- <article  class='row'> --}}
 
<div class=" container-fluid blog-post col-md-3" style="margin:5px; ">
     <span class="row "> 
            <img class="img-responsive img-posts" style="overflow:hidden;" src="images/{{$post->id}}.jpg" />
     </span> 
    <span class="row infos-post">
<h5 class="title-article">
<a href="/posts/{{$post->id}}"class="thumbnail" > {{str_limit($post->title,70)}}</a>  
</h5>

<p class="blog-post-meta">
    <p class="user-name">
           Par {{$post->user->name}} on 
            {{$post->created_at->toFormattedDateString()}}
    </p>
   
</p>

     <p class="post-content">  {{str_limit($post->content, 120)}} </p>

      <a id="more2" href="/posts/{{$post->id}}"  >Read more</a>  

      
</div> 

</span>
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