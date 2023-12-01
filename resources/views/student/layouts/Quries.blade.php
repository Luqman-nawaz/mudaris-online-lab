<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  @include('student/layouts.head')
  <title>Discussion Forum</title>
  <link rel="stylesheet" href="{{asset('assets/css/student/FrontEnd.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/student/quries.css') }}">
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
            <h1 class="m-0"></h1>
            
          </div><!-- /.col -->
          <div class="container">
        <h2>Discussion Forum</h2>

        <!-- Discussion Forum -->
        <div class="query-card">
            <h5>Discussion Forum</h5>
            <p>Ask any queries or participate in discussions:</p>
            <div class="form-group">
                <label for="queryInput">Your Query:</label>
                <textarea class="form-control" id="queryInput" rows="3" placeholder="Enter your query"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" onclick="postQuery()">Submit</button>
        </div>

        <!-- Display Posted Queries -->
        <div id="queriesContainer">
            <div class="dummy-query">
                <p><strong>Query:</strong> How to solve a quadratic equation?</p>
                <div class="answers-list">
                    <h6>Answers:</h6>
                    <div class="answer">To solve a quadratic equation, you can use the quadratic formula.</div>
                </div>
            </div>
            <div class="dummy-query">
                <p><strong>Query:</strong> What are the different types of sorting algorithms?</p>
                <div class="answers-list">
                    <h6>Answers:</h6>
                    <div class="answer">Some common types of sorting algorithms include bubble sort, selection sort, insertion sort, merge sort, quick sort, etc.</div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/student/jquery-3.7.0.min.js')}}"></script>

<script src="{{asset('assets/js/student/quries.bundle.js')}}"></script>
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
