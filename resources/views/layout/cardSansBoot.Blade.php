<div class="row"style="text-align:center;margin-top:700px;width:80% ;margin-left:450px; z-index:1;">@include('sessionFlash')</div>
<h1 style="text-align:center;margin-top:10px;" id="cardTitle">Tous les articles</h1>

<div class="card-cotent row ">
 
      <div class="card1 col-md-9">
                
     
      @foreach ($posts as $post)
  <div class="card">
          <div class='card-bg bg-properties'>
          <img class="img-card img-responsive" src="images/{{$post->id}}.jpg"   alt="">
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
<div class="row">
        <div class="link ">
                        {{ $posts->links() }}
        </div>
</div>

<div class="services" style="width:100%;height:450px;margin:0;padding:30px; background-color:#f5f5f5">
        <p>VOILA !!!</p>
</div>