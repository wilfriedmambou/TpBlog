<header>
    {{-- <img src='img/fungry-logo.png'  width=152 height=52 class='logo' /> --}}
    {{-- <span class='button button-search' id='button-search'>SEE RESTAURANTS</span>  --}}
    <div class='registration-area'>    
      <span class='button' id='sign-in'>SIGN IN</span>
      <span class='button'>REGISTER</span>
      <span>  @if(Auth::check())
            <a class="nav-link ml-auto" href="/user/{{Auth::user()->id}}/edit">{{Auth::user()->name}}</a>
            @endif </span>
     </div>
</header>