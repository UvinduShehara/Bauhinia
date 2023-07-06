<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<!-- <nav class="navbar fixed-top navbar-dark bg-dark"> -->
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="../../assets/images/iconlong.png" alt="BAUHINIA" width="120" height="50" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('category') }}">Category</a>
        </li>

        

         
        <!-- Authentication Links -->
        @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i> Cart</a>
                  </li>

                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-heart"></i> Wishlist</a>
                  </li> -->
                  
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                      @if(Auth::user()->role_as == '1')
                      <a class="dropdown-item" href="/dashboard">
                          Admin Dashboard
                      </a>
                      
                      @endif

                      <!-- <a class="dropdown-item" href="#">
                          My Profile
                      </a> -->
                      <a class="dropdown-item" href="/"
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
</nav>