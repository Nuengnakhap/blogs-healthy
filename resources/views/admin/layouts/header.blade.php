<div class="row">

  <nav id="nav-header" class="navbar" style="width: 100%; display: block;">
    <div class="float-left col-1 col-sm-2 col-md-2">
      <div class="collapse-icon d-md-none">
        <a href="" data-target="#side-menu" data-toggle="collapse">
          <i class="glyphicon glyphicon-th-large"></i>
        </a>
      </div>
      <div class="col-md-10">
        <input type="text" class="d-none d-md-block" id="header-search-field" placeholder="Search for something...">
      </div>
    </div>

    <div class="float-right col-11 col-sm-10 col-md-10">
      <ul class="float-right">
        <li id="welcome" class="d-none d-sm-none d-md-block d-lg-block">Welcome to your administration area</li>
        <li class="fixed-width">
          <a href="#">
            <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
            <span class="badge badge-warning">3</span>
          </a>
        </li>
        <li class="fixed-width">
          <a href="#">
            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
            <span class="badge badge-message">3</span>
          </a>
        </li>
        <!-- <li>
          <a href="#" class="logout">
            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
            log out
          </a>
        </li> -->
        @guest
            <li class="fixed-width">
                <a href="{{ route('admin.login') }}"><strong>{{ __('Login') }}</strong></a>
            </li>
            <li class="fixed-width">
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"><strong>{{ __('Register') }}</strong></a>
                @endif
            </li>
        @else
            <li class="dropdown">
                <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><strong>
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
  </nav>
</div>