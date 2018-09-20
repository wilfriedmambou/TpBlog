<div class="card-cotent ">
   
      <div class="card1">

     
      @foreach ($posts as $post)
  <div class="card">
          <div class='card-bg bg-properties'>
          <img class="img img-responsive" src="images/{{$post->id}}.jpg" style="overflow:hidden; height: 180px;width: 280px;margin-bottom:15px; "  alt="">
          </div>
          <span class='card-first-text'><a href="/posts/{{$post->id}}"class="thumbnail" > {{str_limit($post->title,70)}}</a>  </span>
          <div class='card-second-text'> Par {{$post->user->name}} on 
                  {{$post->created_at->toFormattedDateString()}}</div>
          <div class='card-description'>{{str_limit($post->content, 120)}}
          </div>
          <a class='card-button'href="/posts/{{$post->id}}">En savoir plus</a>
       
  </div>
  @endforeach
 
  
</div>
@include('layout.sideSansBoot')

  
</div>
<div class="link">
                {{ $posts->links() }}
</div>