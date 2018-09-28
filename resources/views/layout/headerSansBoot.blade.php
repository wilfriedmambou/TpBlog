<header>
    {{-- <img src='img/fungry-logo.png'  width=152 height=52 class='logo' /> --}}
    {{-- <span class='button button-search' id='button-search'>SEE RESTAURANTS</span>  --}}
    <div class='registration-area'>  
        @if(!Auth::check())  
      <a class='button'href="/login" id='sign-in'>SIGN IN</a>
      <a class='button-register' href="/register" >REGISTER</a>
      @endif
      <span>  @if(Auth::check())
            <a class="" href="/user/{{Auth::user()->id}}/edit">{{Auth::user()->name}}</a>
          
            <a class='button-logOut' href= "/logout">LOGOUT</a>    
            @endif </span>
     </div>
</header>