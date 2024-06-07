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
      <a class="nav-link logout-btn" href="#" data-toggle="modal" data-target="#logoutModal">
    <i class="fas fa-sign-out-alt"></i>
    </a>
   </li>
   @endguest
  </ul>


  <div id="logoutModal" class="modal fade animated rubberBand delete-modal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="{{ asset('style_account/images/logo.png') }}" alt="Logo" width="50" height="46">
                <h3>Are you sure you want to logout?</h3>
                <div class="m-t-20">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>