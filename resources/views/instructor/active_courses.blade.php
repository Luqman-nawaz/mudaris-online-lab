@extends('instructor/my_layouts.main')
@section('main-section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Active Courses</h1>
          </div><!-- /.col -->


          <!--Dashboard    -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Mudaris Online Lab</li>
              <li class="breadcrumb-item active"><a href="{{route('index')}}">Acticve Courses</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!--Content-->
    <section class="content">
        <div class="row">
          <div class="col-3">
          <div class="inner-sidebar-header justify-content-center">
                <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    New Course
                </button>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-3">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>003</h3>
                <p>ACP</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="{{route('course_home')}}" class="small-box-footer">Go to Course<i class="fas fa-arrow-circle-right ml-1"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>006</h3>
                <p>OOP</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="{{route('active_courses')}}" class="small-box-footer">Go to Course<i class="fas fa-arrow-circle-right ml-1"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>008</h3>
                <p>DSA</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="{{route('active_courses')}}" class="small-box-footer">Go to Course<i class="fas fa-arrow-circle-right ml-1"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>008</h3>
                <p>DSA</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="{{route('active_courses')}}" class="small-box-footer">Go to Course<i class="fas fa-arrow-circle-right ml-1"></i></a>
            </div>
          </div>
          <!-- ./col -->
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
                            <label for="threadTitle">Title</label>
                            <input type="text" class="form-control" id="threadTitle" placeholder="Enter title" autofocus="" />
                        </div>
                        <div class="form-group">
                            <label for="threadTitle">Description</label>
                            <input type="text" class="form-control" id="threadTitle" placeholder="Enter Description" autofocus="" />
                        </div>

                        <div class="custom-file form-control-sm mt-3" style="max-width: 300px;">
                            <input type="file" class="custom-file-input" id="customFile" multiple="" />
                            <label class="custom-file-label" for="customFile">Profile Picture</label>
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
        
    <section>
</div>
@endsection()