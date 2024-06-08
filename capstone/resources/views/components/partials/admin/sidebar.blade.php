<a href="/admin" class="brand-link">
    <x-image-logo style="margin-bottom:-100px;margin-top:-70px;margin-left:-30px"
    style="opacity: .8"/>
</a>
<div class="sidebar">
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="{{route('dashboard')}}" class="nav-link">
          <i class="nav-icon fa fa-tachometer-alt"></i>
          <p>
          {{_('Dashboard')}}
          </p>
        </a>
      </li>
    </ul>
  </nav>
</div>