<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Groups</title>
    
  <link rel="stylesheet" href="{{asset('assets/css/student/FrontEnd.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/student/groups.css') }}">

  @include('student/layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('assets/img/MudarisLogo.jpg')}}" alt="MudarisLogo" height="60" width="80">
    
  </div>

  <!-- Navbar -->
 @include('student/layouts.main-headerbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('student/layouts.main-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
          <div class="col-sm-6">
            <h1 class="m-0">Make a Group of student</h1>
            
          </div><!-- /.col -->
            
            <div class="container" >
        <div class="group-details">
            <h4>Group Details</h4>
            <p id="groupName">Group Name: </p>
            <p id="courseName">Course Name: </p>
        </div>
        <h2>Register Students</h2>
        <form>
            <div class="form-group">
                <label for="groupNameInput">Group Name:</label>
                <input type="text" class="form-control" id="groupNameInput" placeholder="Enter Group Name">
            </div>
            <div class="form-group">
                <label for="courseNameInput">Course Name:</label>
                <input type="text" class="form-control" id="courseNameInput" placeholder="Enter Course Name">
            </div>
            <div id="studentContainer"></div>
            <button type="button" class="btn btn-primary btn-add-student">Add Student</button>
            <button type="submit" class="btn btn-success">Register Group</button>
        </form>
    </div>
    
    <script src="{{asset('assets/js/student/jquery-3.7.0.min.js')}}"></script>

<script src="{{asset('assets/js/student/groups.bundle.js')}}"></script>
    
    </div>
    </div>
    </div>
          </div><!-- /.col -->
          
     
    </div>
    <!-- /.content-header -->

  
  </div>
  @include('student/layouts.footer')
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('student/layouts.footer-scripts')

</body>
</html>
