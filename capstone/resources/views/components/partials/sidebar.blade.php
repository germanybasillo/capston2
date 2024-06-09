<a href="/index" class="brand-link">
    <x-image-logo style="margin-bottom:-100px;margin-top:-70px;margin-left:-30px"
    style="opacity: .8"/>
</a>
<div class="sidebar">
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      
      @if(Auth::check())
   @if(Auth::user()->usertype === 'tenant')

      <li class="nav-item">
        <a href="{{route('tenant')}}" class="nav-link">
          <i class="nav-icon fa fa-tachometer-alt"></i>
          <p>
          {{_('Dashboard')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/tenants" class="nav-link">
          <i class="nav-icon fa fa-users"></i>
          <p>
            {{_('Your Info')}} 
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/bills" class="nav-link">
          <i class="nav-icon fa fa-money-bill"></i>
          <p>
              {{_('Your Bills')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/history" class="nav-link">
          <i class="nav-icon fa fa-file "></i>
          <p>
              {{_('Payment History')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/payments" class="nav-link">
          <i class="nav-icon fa fa-file-invoice"></i>
          <p>
              {{_('Payments')}}
          </p>
        </a>
      </li>
      <li class="nav-header"> {{_('Reports')}}</li>
      <li class="nav-item">
        <a href="/income" class="nav-link">
          <i class="nav-icon fa fa-chart-bar"></i>
          <p>
              {{_('Income Report')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/collect" class="nav-link">
          <i class="nav-icon fa fa-table"></i>
          <p>
              {{_('Collectibles')}}
          </p>
        </a>
      </li>
    </ul>

    @elseif(Auth::user()->usertype === 'landlord')
    @props(['tenants' => 0])
    <li class="nav-item">
      <a href="{{ route('landlord')}}" class="nav-link">
        <i class="nav-icon fa fa-tachometer-alt"></i>
        <p>
          {{ __('Dashboard') }}
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/tenants" class="nav-link">
        <i class="nav-icon fa fa-users"></i>
        <p>
            {{_('Tenants')}}
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/rooms" class="nav-link">
        <i class="nav-icon fa fa-home"></i>
        <p>
            {{_('Rooms')}}
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/bills" class="nav-link">
        <i class="nav-icon fa fa-money-bill"></i>
        <p>
            {{_('Utility Bills')}}
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/beds" class="nav-link">
        <i class="nav-icon fa fa-bed"></i>
        <p>
            {{_('Beds')}}
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/assigns" class="nav-link">
        <i class="nav-icon fa fa-bed"></i>
        <p>
            {{_('Beds-Assign')}}
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/invoice" class="nav-link">
        <i class="nav-icon fa fa-microphone"></i>
        <p>
            {{_('Invoice')}}
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/notice" class="nav-link">
        <i class="nav-icon fa fa-bell"></i>
        <p>
            {{_('Notice')}}
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/sms" class="nav-link">
        <i class="nav-icon fa fa-envelope"></i>
        <p>
            {{_('Message')}}
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/suggestions" class="nav-link">
        <i class="nav-icon fa fa-lightbulb"></i>
        <p>
            {{_('Suggestion')}}
        </p>
      </a>
    </li>
    @endif
    @endif

    @guest
   
    @endguest

  </nav>
</div>