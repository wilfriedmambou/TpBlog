<header>
    {{-- <img src='img/fungry-logo.png'  width=152 height=52 class='logo' /> --}}
    {{-- <span class='button button-search' id='button-search'>SEE RESTAURANTS</span>  --}}
    <div class='registration-area'>  
        @if(!Auth::check())  
      <span class='button' id='sign-in'>SIGN IN</span>
      <span class='button'>REGISTER</span>
      @endif
      <span>  @if(Auth::check())
            <a class="nav-link ml-auto" href="/user/{{Auth::user()->id}}/edit">{{Auth::user()->name}}</a>
          
            <span class='button-logOut'>LOGOUT</span>    
            @endif </span>
     </div>
</header>