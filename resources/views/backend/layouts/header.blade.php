<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
       
      </ul>
  
     
      {{-- <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul> --}}
    </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('backend.dashboard') }}" class="brand-link ">
        {{-- <img src="{{ url("public/images/website_logo.png") }}" alt="logo" class="brand-image img-circle elevation-3"
             style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">Admin Panel</span>
      </a>
  
      
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          
          <div class="info">
            <a href="" class="d-block text-white">जय जिनेन्द्र Admin</a>
          </div>
        </div> --}}
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           
            <li class="nav-item">
              <a href="{{ route('backend.dashboard') }}" class="nav-link text-white {{ Route::is('backend.admin.dashboard') ? 'active' : '' }}">
                <i class="nav-icon fa-sharp fa-solid fa-chart-line"></i>
               <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item ">
              {{-- {{ route('backend.users.index') }}--}}
              <a href="{{ route('users.index') }}" class="nav-link text-white {{ Route::is('backend.user.index') ? 'active' : '' }}">
                  <i class="nav-icon fa-regular fa-user"></i>
                  <p>Users Listing</p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="{{ route('backend.stock.index') }}" class="nav-link text-white {{ Route::is('quiz.index') ? 'active' : '' }}">
                <i class="fa-solid fa-regular fa-pen-nib"></i>
                <p>Stock Listing</p>
              </a>
            </li>
              {{--
              <li class="nav-item ">
                <a href="http://103.69.44.224:8080/shajanandi/Reports.asp?RPID=1&SID=0&V1=0&V2=0&V3=0&V4=0&V5=0" target="_blank" class="nav-link text-white {{ Route::is('quiz.index') ? 'active' : '' }}">
                  <i class="fa-solid fa-regular fa-pen-nib"></i>
                  <p>Report</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{ route('niyam.index') }}" class="nav-link text-white {{ Route::is('niyam.index') ? 'active' : '' }}">
                    <i class="fa-solid fa-regular fa-hands-praying"></i>
                    <p>Niyam</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{ route('tap.index') }}" class="nav-link text-white {{ Route::is('tap.index') ? 'active' : '' }}">
                    <i class="fa-solid fa-regular fa-hands-praying"></i>
                    <p>Tap</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{ route('admin.contactUs') }}" class="nav-link text-white {{ Route::is('admin.contactUs') ? 'active' : '' }}">
                    <i class="fa-solid fa-regular fa-mobile"></i>
                      <p>Contact Us</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{ route('admin.suggestion.index') }}" class="nav-link text-white {{ Route::is('admin.suggestion.index') ? 'active' : '' }}">
                  <i class="fa-solid fa-users-line"></i>
                    <p>Suggestions</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{ route('admin.notice.index') }}" class="nav-link text-white {{ Route::is('admin.notice.index') ? 'active' : '' }}">
                  <i class="fa-solid fa-envelope"></i>
                    <p>Notices</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{ route('admin.logout') }}" class="nav-link text-white {{ Route::is('admin.logout') ? 'active' : '' }}">
                    <i class="nav-icon fa-regular fa-user"></i>
                    <p>Logout</p>
                </a>
              </li> --}}
           
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>