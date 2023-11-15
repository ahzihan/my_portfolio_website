<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="container-fluid justify-content-end">
        <li class="nav-link">
            <a href="{{ route('home') }}" target="_blank" class="btn btn-warning">Front End</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img alt="image" src="{{ asset('uploads/'.Auth::guard('admin')->user()->photo) }}" class="rounded-circle-custom mr-1">
            <div class="d-sm-none d-lg-inline-block">{{ Auth::guard('admin')->user()->name }}</div>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('editProfile') }}"><i class="far fa-user"></i> Edit Profile</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
          </ul>
        </li>
    </ul>
</nav>
