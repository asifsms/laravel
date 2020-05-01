<div class="wrapper ">
  <div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
  
        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
      <a href="https://hikester.life/" class="simple-text logo-normal">
        {{ __('Hikester') }}
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('admin') }}">
            <i class="material-icons">dashboard</i>
              <p>{{ __('Dashboard') }}</p>
          </a>
        </li>
        <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
          <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
            <i class="material-icons">person</i>
            <p>{{ __('Users') }}
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse show" id="laravelExample">
            <ul class="nav">
              <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('profile') }}">
                  <span class="sidebar-mini"> UP </span>
                  <span class="sidebar-normal">{{ __('User profile') }} </span>
                </a>
              </li>
              <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                {{-- <a class="nav-link" href="{{ route('user.index') }}">
                  <span class="sidebar-mini"> UM </span>
                  <span class="sidebar-normal"> {{ __('User Management') }} </span>
                </a> --}}
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item{{ $activePage == 'notification' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('notification.index') }}">
            <i class="material-icons">content_paste</i>
              <p>{{ __('Notification') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'images' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('image.index') }}">
            <i class="material-icons">image</i>
              <p>{{ __('Images') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
          {{-- <a class="nav-link" href="{{ route('icons') }}">
            <i class="material-icons">bubble_chart</i>
            <p>{{ __('Icons') }}</p>
          </a> --}}
        </li>
        <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
          {{-- <a class="nav-link" href="{{ route('map') }}">
            <i class="material-icons">location_ons</i>
              <p>{{ __('Maps') }}</p>
          </a> --}}
        </li>
        <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
          {{-- <a class="nav-link" href="{{ route('notifications') }}">
            <i class="material-icons">notifications</i>
            <p>{{ __('Notifications') }}</p>
          </a> --}}
        </li>
        <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
          {{-- <a class="nav-link" href="{{ route('language') }}">
            <i class="material-icons">language</i>
            <p>{{ __('RTL Support') }}</p>
          </a> --}}
        </li>
        <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }} bg-danger">
          {{-- <a class="nav-link text-white" href="{{ route('upgrade') }}">
            <i class="material-icons">unarchive</i>
            <p>{{ __('Upgrade to PRO') }}</p>
          </a> --}}
        </li>
      </ul>
    </div>
  </div>
  <div class="main-panel">
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="#">{{ $titlePage }}</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
    <span class="sr-only">Toggle navigation</span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <form class="navbar-form">
        <div class="input-group no-border">
        <input type="text" value="" class="form-control" placeholder="Search...">
        <button type="submit" class="btn btn-white btn-round btn-just-icon">
          <i class="material-icons">search</i>
          <div class="ripple-container"></div>
        </button>
        </div>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home.index') }}">
            <i class="material-icons">dashboard</i>
            <p class="d-lg-none d-md-block">
              {{ __('Stats') }}
            </p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">notifications</i>
            <span class="notification">5</span>
            <p class="d-lg-none d-md-block">
              {{ __('Some Actions') }}
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">{{ __('Mike John responded to your email') }}</a>
            <a class="dropdown-item" href="#">{{ __('You have 5 new tasks') }}</a>
            <a class="dropdown-item" href="#">{{ __('You\'re now friend with Andrew') }}</a>
            <a class="dropdown-item" href="#">{{ __('Another Notification') }}</a>
            <a class="dropdown-item" href="#">{{ __('Another One') }}</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              {{ __('Account') }}
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            {{-- <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a> --}}
            <a class="dropdown-item" href="#">{{ __('Settings') }}</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
            {{-- <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a> --}}
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

    @yield('content')
    <footer class="footer">
      <div class="container-fluid">
        
        
      </div>
    </footer>
  </div>
</div>