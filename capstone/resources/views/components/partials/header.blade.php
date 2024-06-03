<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      <ul class="navbar-nav">
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{_('Login')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{_('Register')}}</a>
        </li>
        @else
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="{{ route('logout') }}">
    <i class="fas fa-sign-out-alt"></i>
    </a>
   </li>
   @endguest
  </ul>