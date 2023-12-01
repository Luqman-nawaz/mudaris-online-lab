 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('student/home')}}" class="brand-link">
      <img src="{{asset('assets/img/mudarisLogo.jpg')}}" alt="Mudaris Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Mudaris Online Lab</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
     
      <div class="image">
     
          <img src="{{asset('assets/img/user1-128x128.jpg')}}"  class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">inzamam</a>
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
          <li class="nav-item menu-open">
            <a href="{{url('student/home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="{{url('/IDE')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
              IDE
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/RSubject')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Register Subject
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
         
            
              
             
          <li class="nav-item">
            <a href="{{url('/groups')}}" class="nav-link">
            <i class="fa fa-users" aria-hidden="true"></i>
              <p>
              My groups
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/groups')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Group A</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/groups')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Group B</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('/Quries')}}"  class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Queries Forms
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/performance')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                My Performance
               
              </p>
            </a>
            
             
          </li>
          <li class="nav-header">OTHERS</li>
         
          <li class="nav-item">
            <a href="{{url('/chat')}}" class="nav-link">
              <i class="fas fa-envelope mr-2"></i>
              <p>
              Chat
                <span class="badge badge-info right">8</span>
              </p>
            </a>
          </li>
          
          
          
          <li class="nav-header">MORE</li>
          
          <li class="nav-item">
            <a href="{{url('/register_Course')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Enroll in subject</p>
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
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>