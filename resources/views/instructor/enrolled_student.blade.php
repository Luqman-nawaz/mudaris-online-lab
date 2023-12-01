@extends('instructor/course_layout.main')
@section('main-section')
<head>
    <link rel="stylesheet" href="{{asset('css/student.css')}}">
</head>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Enrolled Students</h1>
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
    <div class="event-schedule-area-two bg-color pad100">
    <div class="container">
        <div class="row">
            <div class="col-3">
            <div class="inner-sidebar-header justify-content-center">
                <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    New Student
                </button>
            </div>
            </div>
        </div>

        
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="home" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">Id</th>
                                        <th scope="col">Profile Picture</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">Record</th>
                                    </tr>
                                </thead>
                               <div class="scrollable-container" style="max-height: 300px; overflow-y:auto;">
                               <tbody>
                                    <tr class="inner-box">
                                        <th scope="row">
                                            <div class="event-date">
                                                <span>11930</span>
                                                
                                            </div>
                                        </th>
                                        <td>
                                            <div class="event-img">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="event-wrap">
                                                <h3><a href="#">Hassan Zaib</a></h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="r-no">
                                                <span>ACP</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="r-no">
                                            <a href="{{route('student_record')}}">
                                                <button type="button" class="btn btn-primary">Record</button>
                                            </a>

                                            </div>
                                        </td>
                                       
                                    </tr>
                                    <tr class="inner-box">
                                        <th scope="row">
                                            <div class="event-date">
                                                <span>11064</span>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="event-img">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="event-wrap">
                                                <h3><a href="#">Abdul Rafay</a></h3>
                
                                            </div>
                                        </td>
                                        <td>
                                            <div class="r-no">
                                                <span>ACP</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="r-no">
                                            <a href="https://example.com">
                                                <button type="button" class="btn btn-primary">Record</button>
                                            </a>

                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr class="inner-box">
                                        <th scope="row">
                                            <div class="event-date">
                                                <span>11064</span>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="event-img">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="event-wrap">
                                                <h3><a href="#">Abdul Rafay</a></h3>
                
                                            </div>
                                        </td>
                                        <td>
                                            <div class="r-no">
                                                <span>ACP</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="r-no">
                                            <a href="https://example.com">
                                                <button type="button" class="btn btn-primary">Record</button>
                                            </a>

                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr class="inner-box">
                                        <th scope="row">
                                            <div class="event-date">
                                                <span>11064</span>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="event-img">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="event-wrap">
                                                <h3><a href="#">Abdul Rafay</a></h3>
                
                                            </div>
                                        </td>
                                        <td>
                                            <div class="r-no">
                                                <span>ACP</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="r-no">
                                            <a href="https://example.com">
                                                <button type="button" class="btn btn-primary">Record</button>
                                            </a>

                                            </div>
                                        </td>
                                    </tr>
                                    
                                </tbody>

                            
                            </div>
                            </table>
                        </div>
                    </div>
                    
                    
                    
                    
                </div>
            <!-- /col end-->
        </div>
        <!-- /row end-->
    </div>
</div>
<!--Form Popup-->
<div class="modal fade" id="threadModal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header d-flex align-items-center bg-primary text-white">
                        <h6 class="modal-title mb-0" id="threadModalLabel">New Discussion</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="threadTitle">Enter Student Id:</label>
                            <input type="text" class="form-control" id="threadTitle" placeholder="Enter Student Id" autofocus="" />
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    </section>    
  <!-- /.content-wrapper -->
   

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


</div>


@endsection()