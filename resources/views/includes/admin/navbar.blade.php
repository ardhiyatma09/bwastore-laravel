<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
    <div class="container-fluid">
      <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">&laquo; Menu</button>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Desktop menu -->
        <ul class="navbar-nav d-none d-lg-flex ml-auto">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
              <img src="{{url('template/images/account_user.png')}}" class="rounded-circle mr-2 profile-picture" alt="">
              Hi, {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu">
              <a href="{{route('admin-dashboard')}}" class="dropdown-item">Dashboard</a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>
            </div>
          </li>
        </ul>
        <!--Mobile Menu-->
        <ul class="navbar-nav d-block d-lg-none">
          <li class="nav-item">
            <a href="#" class="nav-link">
              Hi, Angga
            </a>
          </li>
        </ul>
      </div>
    </div>
</nav>