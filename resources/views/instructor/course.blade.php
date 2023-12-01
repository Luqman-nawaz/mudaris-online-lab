@extends('instructor/course_layout.main')
@section('main-section')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">ACP</h1>
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

      


      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="container-fluid mt-1">
          <div class="course1">
            <div class="d-flex justify-content-between course11">
              <h6>Date: 22-06-2023</h6>
              <h6>Week No.1</h6>
            </div>
        <div class="container course2 mt-2">
        <div class="course11">
        <a href="{{route('task_progress')}}"><h5> <i class="fas fa-file"></i> Task No.1 </h5></a>
        </div>
         <p>HTML</p>
          
           <li>
             Front End Markup Language
           </li>
           <li>
             Front End Markup Language
           </li>
          
        </div>
        <div class="row mt-1">
          <div class="col-3">
              <div class="inner-sidebar-header justify-content-center">
                    <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Start Session
                    </button>
                </div>
          </div>
        </div>
      </div>
        </div>
        <!-- /.row -->
         <!-- Small boxes (Stat box) -->
        <div class="container-fluid mt-1">
          <div class="course1">
            
            <div class="d-flex justify-content-between course11">
              <h6>Date: 28-06-2023</h6>
              <h6>Week No.2</h6>
            </div>
        <div class="container course2 mt-2">
        <div class="course11">
        <a href="{{route('task_progress')}}" ><h5> <i class="fas fa-file"></i> Task No.1 </h5></a>
        </div>
         <p>CSS</p>
          
           <li>
             Styling HTML Elements
           </li>
           <li>
             Class, Id
           </li>
           <li>
             Inline, External, Internal 
           </li>
           <div class="row mt-1">
          <div class="col-3">
              <div class="inner-sidebar-header justify-content-center">
                    <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Start Session
                    </button>
                </div>
          </div>
        </div>
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