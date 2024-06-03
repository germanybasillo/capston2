<x-app-layout>
    <x-slot name="header">
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
    </x-slot>

    <a href="/index" class="brand-link">
          <x-image-logo style="margin-bottom:-100px;margin-top:-70px;margin-left:-30px"
          style="opacity: .8"/>
      </a>
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
            <li class="nav-item">
              <a href="landingpage" class="nav-link">
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
        </nav>
      </div>
</x-app-layout>