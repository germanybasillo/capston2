<a href="/index" class="brand-link">
  <x-image-logo style="margin-bottom:-100px;margin-top:-70px;margin-left:-30px" style="opacity: .8"/>
</a>

<div class="sidebar">
  <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          @if(Auth::guard('admin')->check())
              <li class="nav-item">
                  <a href="" class="nav-link">
                      <i class="nav-icon fa fa-tachometer-alt"></i>
                      <p>{{ __('Dashboard') }}</p>
                  </a>
              </li>
              <!-- Add other admin-specific navigation items here -->
          @elseif(Auth::check())
              @if(Auth::user()->usertype === 'tenant')
                  <li class="nav-item">
                      <a href="{{ route('tenant') }}" class="nav-link">
                          <i class="nav-icon fa fa-tachometer-alt"></i>
                          <p>{{ __('Dashboard') }}</p>
                      </a>
                  </li>
                  <!-- Add other tenant-specific navigation items here -->
                  <li class="nav-item">
                      <a href="/payments" class="nav-link">
                          <i class="nav-icon fa fa-file-invoice"></i>
                          <p>{{ __('Payments') }}</p>
                      </a>
                  </li>
                  <li class="nav-header">{{ __('Reports') }}</li>
                  <li class="nav-item">
                      <a href="/income" class="nav-link">
                          <i class="nav-icon fa fa-chart-bar"></i>
                          <p>{{ __('Income Report') }}</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="/collect" class="nav-link">
                          <i class="nav-icon fa fa-table"></i>
                          <p>{{ __('Collectibles') }}</p>
                      </a>
                  </li>
              @elseif(Auth::user()->usertype === 'landlord')
                  <li class="nav-item">
                      <a href="{{ route('landlord') }}" class="nav-link">
                          <i class="nav-icon fa fa-tachometer-alt"></i>
                          <p>{{ __('Dashboard') }}</p>
                      </a>
                  </li>
                  <!-- Add other landlord-specific navigation items here -->
              @endif
          @else
              <li class="nav-item">
                  <a href="/tenants" class="nav-link">
                      <i class="nav-icon fa fa-users"></i>
                      <p>{{ __('Tenants') }}</p>
                  </a>
              </li>
              <!-- Add other guest-specific navigation items here -->
          @endguest
        
      </ul>
  </nav>
</div>





























































{{-- <a href="/index" class="brand-link">
  <x-image-logo style="margin-bottom:-100px;margin-top:-70px;margin-left:-30px" style="opacity: .8"/>
</a>

<div class="sidebar">
  <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          @if(Auth::guard('admin')->check())
              <li class="nav-item">
                  <a href="{{ route('admin.dashboard') }}" class="nav-link">
                      <i class="nav-icon fa fa-tachometer-alt"></i>
                      <p>{{ __('Dashboard') }}</p>
                  </a>
              </li>
          @elseif(Auth::check())
              @if(Auth::user()->usertype === 'tenant')
                  <li class="nav-item">
                      <a href="{{ route('tenant') }}" class="nav-link">
                          <i class="nav-icon fa fa-tachometer-alt"></i>
                          <p>{{ __('Dashboard') }}</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="/payments" class="nav-link">
                          <i class="nav-icon fa fa-file-invoice"></i>
                          <p>{{ __('Payments') }}</p>
                      </a>
                  </li>
                  <li class="nav-header">{{ __('Reports') }}</li>
                  <li class="nav-item">
                      <a href="/income" class="nav-link">
                          <i class="nav-icon fa fa-chart-bar"></i>
                          <p>{{ __('Income Report') }}</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="/collect" class="nav-link">
                          <i class="nav-icon fa fa-table"></i>
                          <p>{{ __('Collectibles') }}</p>
                      </a>
                  </li>
              @elseif(Auth::user()->usertype === 'landlord')
                  <li class="nav-item">
                      <a href="{{ route('landlord') }}" class="nav-link">
                          <i class="nav-icon fa fa-tachometer-alt"></i>
                          <p>{{ __('Dashboard') }}</p>
                      </a>
                  </li>
              @endif
          @else
              <li class="nav-item">
                  <a href="/tenants" class="nav-link">
                      <i class="nav-icon fa fa-users"></i>
                      <p>{{ __('Tenants') }}</p>
                  </a>
              </li>
          @endguest
        
      </ul>
  </nav>
</div> --}}
