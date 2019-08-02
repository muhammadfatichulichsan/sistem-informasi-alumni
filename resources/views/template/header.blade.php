<header class="main-header">
    <!-- Logo -->
    <a href="/post" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="{{ asset('svg/favicon.png') }}" style="width: 20px"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="{{ asset('svg/logo.png') }}" style="width: 200px"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          @if(auth::check())
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <li class="dropdown messages-menu">
            <a href="{{ route('post.create') }}">
              Tulis Sesuatu
            </a>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @if(auth::check())
              @if(auth()->user()->avatar)
              <img src="{{ asset('storage/' . auth()->user()->avatar)}}" class="user-image" alt="User Image">
              @else
              <img src="{{ asset('svg/t4.jpg') }}" class="user-image" alt="User Image">
              @endif
              <span class="hidden-xs">{{ auth()->user()->name }}</span>
              @else
              <span>Member</span>
              @endif
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                @if(auth::check())
                @if(auth()->user()->avatar)
                <img src="{{ asset('storage/' . auth()->user()->avatar)}}" class="img-circle" alt="User Image">
                @else

                <img src="{{ asset('svg/t4.jpg')}}" class="img-circle" alt="User Image">
                @endif
                <p>{{ auth()->user()->name }}
                  <small>Member since Nov. 2012</small>
                </p>
                @else
                <p>Member
                  <small>Member since Nov. 2012</small>
                </p>
                @endif
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-sm-6 text-center">
                    <a href="{{ route('profil') }}" class="btn btn-default btn-flat" >Profil</a>
                  </div>
                  <div class="col-sm-6 text-center">
                     <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              @else
                <li class="dropdown messages-menu">
                  <a class="btn btn-primary btn-flat" href="{{ route('login') }}">
                    Login
                  </a>
                </li>
              @endif
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>