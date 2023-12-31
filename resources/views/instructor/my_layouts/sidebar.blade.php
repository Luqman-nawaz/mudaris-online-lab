<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('index')}}" class="brand-link">
      <img src="img/mudaris1.png" alt="Mudaris Logo" class="brand-image img-circle elevation-3"    style="border-radius: 100%;">
      <span class="brand-text font-weight-light">Mudaris Online Lab</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ghulam Mujtaba</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="{{route('index')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>
          <li class="nav-item ">
            <a href="{{route('profile')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
            
          </li>
          <li class="nav-item ">
            <a href="{{route('active_courses')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Active Courses
              </p>
            </a>
            
          </li>
          
          <li class="nav-item ">
            <a href="{{route('completed_courses')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Completed Courses
                
              </p>
            </a>
            
          </li>

          <li class="nav-item ">
            <a href="{{route('query')}}" class="nav-link ">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Queries
              </p>
            </a>
            
          </li>
          
          
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
            
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>