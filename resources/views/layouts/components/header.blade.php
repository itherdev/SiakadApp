<nav class="navbar navbar-expand-lg main-navbar container">
  <a href="index.html" class="navbar-brand sidebar-gone-hide">SIAKAD IKMI</a>
  <div class="navbar-nav">
    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
  </div>
  <ul class="navbar-nav navbar-right ml-auto">
    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
      <div class="dropdown-menu dropdown-list dropdown-menu-right">
        <div class="dropdown-header">Messages
          <div class="float-right">
            <a href="#">Mark All As Read</a>
          </div>
        </div>
        <div class="dropdown-list-content dropdown-list-message">
          <a href="#" class="dropdown-item dropdown-item-unread">
            <div class="dropdown-item-avatar">
              <img alt="image" src="{{asset('stisla/assets/img/avatar/avatar-1.png')}}" class="rounded-circle">
              <div class="is-online"></div>
            </div>
            <div class="dropdown-item-desc">
              <b>Kusnaedi</b>
              <p>Hello, Bro!</p>
              <div class="time">10 Hours Ago</div>
            </div>
          </a>
          
        </div>
        <div class="dropdown-footer text-center">
          <a href="#">View All <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </li>
    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
      <div class="dropdown-menu dropdown-list dropdown-menu-right">
        <div class="dropdown-header">Notifications
          <div class="float-right">
            <a href="#">Mark All As Read</a>
          </div>
        </div>
        <div class="dropdown-list-content dropdown-list-icons">
          <a href="#" class="dropdown-item dropdown-item-unread">
            <div class="dropdown-item-icon bg-primary text-white">
              <i class="fas fa-code"></i>
            </div>
            <div class="dropdown-item-desc">
              Template update is available now!
              <div class="time text-primary">2 Min Ago</div>
            </div>
          </a>
          
        </div>
        <div class="dropdown-footer text-center">
          <a href="#">View All <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </li>
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
      <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
      <div class="d-sm-none d-lg-inline-block">Hi, Bambang</div></a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">Logged in 5 min ago</div>
        <a href="features-profile.html" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Profile
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item has-icon text-danger">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>

{{-- Menu Navbar --}}
<nav class="navbar navbar-secondary navbar-expand-lg">
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Portal</span></a>
        <ul class="dropdown-menu">
          <li class="nav-item"><a href="index-0.html" class="nav-link">General Dashboard</a></li>
          <li class="nav-item"><a href="index.html" class="nav-link">Ecommerce Dashboard</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="far fa-clone"></i><span>Perkuliahan</span></a>
        <ul class="dropdown-menu">
          <li class="nav-item"><a href="#" class="nav-link">Not Dropdown Link</a></li>
          <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Hover Me</a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
              <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Link 2</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="#" class="nav-link">Link 3</a></li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
{{-- End Navbar --}}