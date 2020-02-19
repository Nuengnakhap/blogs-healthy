<header>
  <!-- navigation -->
  <nav class="back navbar frouterixed-top navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand py-2" href="{{route('home')}}" style="color:black">
        <img src="{{asset('user/images/healthy_heart.png')}}" width="45px" height="45px" class="mx-3">Healthy
      </a>
        
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon""></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item mx-lg-4 my-lg-0 my-3">
            <a class="nav-link" href="{{route('post.index')}}"><strong>บทความสุขภาพ</strong>
            </a>
          </li>
          <li class="nav-item mx-lg-4 my-lg-0 my-3">
            <a class="nav-link" href="{{route('info')}}"><strong>InfoGraphic</strong>
            </a>
          </li>
          <li class="nav-item mx-lg-4 my-lg-0 my-3">
            <a class="nav-link" href="{{route('forum.index')}}"><strong>พื้นที่แบ่งปันความรู้</strong>
            </a>
          </li>
          @guest
              <li class="nav-item mx-lg-4 my-lg-0 my-3">
                  <a class="nav-link" href="{{ route('login') }}"><strong>{{ __('Login') }}</strong></a>
              </li>
              <li class="nav-item mx-lg-4 my-lg-0 my-3">
                  @if (Route::has('register'))
                      <a class="nav-link" href="{{ route('register') }}"><strong>{{ __('Register') }}</strong></a>
                  @endif
              </li>
          @else
              <li class="nav-item dropdown mx-lg-4 my-lg-0 my-3">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><strong>
                      {{ Auth::user()->name }} <span class="caret"></span></strong>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();"><strong>
                          {{ __('Logout') }}</strong>
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
  <!-- //navigation -->
</header>