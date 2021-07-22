<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand" href="#">YoursTruly</a>
      

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Videos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sport</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Arts & Culture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Local Initiatives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1">Contests</a>
          </li>
        </ul>
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
        <div class="authlinks">
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
        
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        </div>
      </div>
    </div>
  </nav>
</header>

<div class="col-md-4">
  <div class="position-sticky" style="top: 2rem;">
    <div class="p-4 mb-3 bg-light rounded">
      <h4 class="fst-italic">This is yours truly, Me</h4>
      <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
        Itaque a nobis in placeat nemo ullam iusto provident. Sed, temporibus consequatur.</p>
    </div>

    <div class="p-4">
      <h4 class="fst-italic">Archives</h4>
      <ol class="list-unstyled mb-0">
        <li><a href="#">July 2021</a></li>
        <li><a href="#">June 2021</a></li>
        <li><a href="#">May 2021</a></li>
        <li><a href="#">April 2021</a></li>
        <li><a href="#">March 2021</a></li>
        <li><a href="#">February 2021</a></li>
        <li><a href="#">January 2021</a></li>
        <li><a href="#">December 2020</a></li>
        <li><a href="#">November 2020</a></li>
        <li><a href="#">October 2020</a></li>
        <li><a href="#">September 2020</a></li>
        <li><a href="#">August 2020</a></li>
        <li><a href="#">Older</a></li>

      </ol>
    </div>

    <div class="p-4">
      <h4 class="fst-italic">Find Me</h4>
      <ol class="list-unstyled">
        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
      </ol>
    </div>
  </div>
</div>





  
   
   