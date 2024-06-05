<a href="/index" class="brand-link">
    <x-image-logo style="margin-bottom:-100px;margin-top:-70px;margin-left:-30px"
    style="opacity: .8"/>
</a>
<div class="sidebar">
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      @guest 
      <li class="nav-item">
          <a href="landingpage" class="nav-link">
            <i class="nav-icon fa fa-tachometer-alt"></i>
            <p>
            {{_('Dashboard')}}
            </p>
          </a>
        </li>
      @endguest 

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
              {{_('Tenants Profile')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/rooms" class="nav-link">
          <i class="nav-icon fa fa-home"></i>
          <p>
              {{_('Room Management')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/beds" class="nav-link">
          <i class="nav-icon fa fa-bed"></i>
          <p>
              {{_('Bed Management')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/bed_assigns" class="nav-link">
          <i class="nav-icon fa fa-bed"></i>
          <p> 
              {{_('Room Assignment')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/bill" class="nav-link">
          <i class="nav-icon fa fa-money-bill"></i>
          <p>
              {{_('Utility Bills')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/invoice" class="nav-link">
          <i class="nav-icon fa fa-file-invoice"></i>
          <p>
              {{_('Invoice')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/payment-his" class="nav-link">
          <i class="nav-icon fa fa-file "></i>
          <p>
              {{_('Payment History')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="payment" class="nav-link">
          <i class="nav-icon fa fa-file-invoice"></i>
          <p>
              {{_('Payments')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/sms" class="nav-link">
          <i class="nav-icon fa fa-envelope"></i>
          <p>
              {{_('Room Management')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/notices" class="nav-link">
          <i class="nav-icon fa fa-bell"></i>
          <p>
              {{_('Notice Board')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/suggestion" class="nav-link">
          <i class="nav-icon fa fa-file-invoice"></i>
          <p>
              {{_('Suggestion')}}
          </p>
        </a>
      </li>
      <li class="nav-header"> {{_('Reports')}}</li>
      <li class="nav-item">
        <a href="/income" class="nav-link">
          <i class="nav-icon fa fa-chart-bar"></i>
          <p>
              {{_('Room Management')}}
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/collectibles" class="nav-link">
          <i class="nav-icon fa fa-table"></i>
          <p>
              {{_('Collectibles')}}
          </p>
        </a>
      </li>
    </ul>

    @elseif(Auth::user()->usertype === 'landlord')

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
    @endif
    @endif

  </nav>
</div>