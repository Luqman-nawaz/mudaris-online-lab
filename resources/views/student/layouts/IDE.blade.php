<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C++ Compiler</title>
    
  <link rel="stylesheet" href="{{asset('assets/css/student/FrontEnd.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/student/IDE.css') }}">

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
          <div class="container">
        <h2>C++ Compiler</h2>

        <div class="form-group">
            <label for="codeInput">C++ Code:</label>
            <textarea class="form-control code-input" id="codeInput" rows="10" placeholder="Enter your C++ code"></textarea>
        </div>
       
        <button type="submit" class="btn btn-primary" onclick="compileCode()">Compile & Run</button>
        <button type="submit" style= float:right; class="btn btn-primary 1" onclick="compileCode()" >Submit</button>
        <div class="output-container">
            <h5>Output:</h5>
            <pre class="output" id="output"></pre>
          
       
        
        </div>
        
    </div>
    <script src="{{asset('assets/js/student/jquery-3.7.0.min.js')}}"></script>
    @include('student/layouts.alert_question')
    <script src="{{asset('assets/js/student/IDE.bundle.js')}}"></script>
    
   
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









