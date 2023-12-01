@extends('instructor/course_layout.main')
@section('main-section')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Attendence Record</h1>
          </div><!-- /.col -->


          <!--Dashboard    -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a href="{{route('index')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('active_courses')}}">Active Courses</a></li>
              <li class="breadcrumb-item active">ACP</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    
    <title>Attendence Record</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Attendance Sheet ACP</h4>
                    </div>
                </div>
                <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Student Id</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Employee Name</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Select Month</label>
                            <select class="select floating">
                                <option>-</option>
                                <option>Jan</option>
                                <option>Feb</option>
                                <option>Mar</option>
                                <option>Apr</option>
                                <option>May</option>
                                <option>Jun</option>
                                <option>Jul</option>
                                <option>Aug</option>
                                <option>Sep</option>
                                <option>Oct</option>
                                <option>Nov</option>
                                <option>Dec</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Select Year</label>
                            <select class="select floating">
                                <option>-</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
						<div class="table-responsive">
                            <table class="table table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Student Id</th>
                                        <th>Student Name</th>
                                        <th>Week-1</th>
                                        <th>Week-2</th>
                                        <th>Week-3</th>
                                        <th>Week-4</th>
                                        <th>Percentage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>11930</td>
                                        <td>Hassan Zaib</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                       
                                        <td>75% </td>
                                    </tr>
                                    <tr>
                                        <td>11064</td>
                                        <td>Abdul Rafay</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        
                                        <td>75%</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
						</div>
                    </div>
                </div>
            </div>
            

                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
   

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

@endsection()