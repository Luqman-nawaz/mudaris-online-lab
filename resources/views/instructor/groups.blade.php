@extends('instructor/course_layout.main')
@section('main-section')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Groups</h1>
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
    <div class="container">
    <div class="row">
                <div class="col-3">
                <div class="inner-sidebar-header justify-content-center">
                 <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    New Group
                </button>
                </div>
                </div>
        </div>
        
    <div class="mt-2">
        <div class="d-style btn btn-brc-tp border-2 bgc-white btn-outline-blue btn-h-outline-blue btn-a-outline-blue w-100 my-2 py-3 shadow-sm">
        <!-- Basic Plan -->
         
        <div class="row align-items-center mt-3">
          <div class="col-12 col-md-4">
            
            <h4 class="pt-3 text-170 text-600 text-primary-d1 letter-spacing">
              Group 01
            </h4>
          </div>

          <ul class="list-unstyled mb-0 col-12 col-md-4 text-dark-l1 text-90 text-left my-4 my-md-0">
            <li>
              <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
            
                <span class="text-110">Abdul Rafay</span>

              
            </li>

            <li class="mt-25">
              <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
              <span class="text-110">
                Shoaib
            </span>
            </li>

            <li class="mt-25">
            <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
              <span class="text-110">
                Hassan Zaib
            </span>
            </li>
          </ul>

          <div class="col-12 col-md-4 text-center">
          <div class="inner-sidebar-header justify-content-center">
                <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Add Group Member
                </button>
            </div>
        </div>
        </div>

    </div>
</div>
<!--Add Group Member Form-->
<div class="modal fade" id="threadModal1" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
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
                            <label for="threadTitle">Enter Student Id</label>
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
      
</div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<div class="modal fade" id="threadModal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header d-flex align-items-center bg-primary text-white">
                        <h6 class="modal-title mb-0" id="threadModalLabel">New Group</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="threadTitle">Group Name</label>
                            <input type="text" class="form-control" id="threadTitle" placeholder="Group Name" autofocus="" />
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection()