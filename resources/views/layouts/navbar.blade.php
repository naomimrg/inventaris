<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>
  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline" style="color: black; font-size: 14px;">
          @if(auth()->user()->level === 'admin')
            <i class="fas fa-user-shield fa-sm fa-fw mr-2 text-gray-400"></i> 
            {{ auth()->user()->name }}
          @else
            {{ auth()->user()->name }}
          @endif
        </span>
        <img class="img-profile rounded-circle" src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile.svg">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <!-- Profile -->
        <a class="dropdown-item" href="/profile">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Profile
        </a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}" style="color: black; font-size: 14px;">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400 "></i>
        Logout
      </a>
    </li>
  </ul>
</nav>
