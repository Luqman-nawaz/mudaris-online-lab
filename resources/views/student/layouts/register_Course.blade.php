<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('assets/css/student/FrontEnd.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/student/registerNewSub.css') }}">

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
  <div class="backImage">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
            <h1 class="m-0">Register New subject</h1>
            <div class=container>
            <form>
            <div class="form-group">
                <label for="subjectId">Subject ID:</label>
                <input type="text" class="form-control" id="subjectId" placeholder="Enter Subject ID">
            </div>
            <div class="form-group">
                <label for="subjectName">Subject Name:</label>
                <input type="text" class="form-control" id="subjectName" placeholder="Enter Subject Name">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
            </div>
          </div><!-- /.col -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
