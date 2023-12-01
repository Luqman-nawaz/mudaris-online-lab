
<!DOCTYPE html>
<html>
<head>
  <title>Student Performance</title>
  <link rel="stylesheet" href="{{asset('assets/css/student/FrontEnd.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/student/performance.css') }}">
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
            
          </div><!-- /.col -->
         
          <div class="container" >

  
    <h1 class="heading">Student Performance</h1>
    <table id="performance-table">
      <thead>
        <tr>
          <th>Subject</th>
          <th>Total Labs</th>
          <th>Labs Submitted</th>
          <th>Labs Missed</th>
          <th>Percentage</th>
          <th>Lab Marks</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>DSA</td>
          <td><input type="number" class="total-labs" value="10" readonly></td>
          <td><input type="number" class="labs-submitted" value="7" readonly></td>
          <td class="labs-missed">3</td>
          <td class="percentage"></td>
          <td class="lab-marks"></td>
        </tr>
        <tr>
          <td>Oop</td>
          <td><input type="number" class="total-labs" value="12" readonly></td>
          <td><input type="number" class="labs-submitted" value="10" readonly></td>
          <td class="labs-missed">2</td>
          <td class="percentage"></td>
          <td class="lab-marks"></td>
        </tr>
        <tr>
          <td>C++</td>
          <td><input type="number" class="total-labs" value="8" readonly></td>
          <td><input type="number" class="labs-submitted" value="6" readonly></td>
          <td class="labs-missed">2</td>
          <td class="percentage"></td>
          <td class="lab-marks"></td>
        </tr>
      </tbody>
    </table>
  </div>


 

  <script src="{{asset('assets/js/student/jquery-3.7.0.min.js')}}"></script>

<script src="{{asset('assets/js/student/performance.bundle.js')}}"></script>


</div><!-- /.col -->
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
</body>
</html>







