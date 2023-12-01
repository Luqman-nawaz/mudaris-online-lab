@extends('instructor/course_layout.main')
@section('main-section')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lab Dashboard</h1>
          </div><!-- /.col -->


          <!--Dashboard    -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a href="{{route('index')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('active_courses')}}">Active Courses</a></li>
              <li class="breadcrumb-item active">Lab Dashboard</li>
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
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="inner-sidebar-header justify-content-center">
                        <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
                            
                            Create Task
                        </button>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="inner-sidebar-header justify-content-center">
                        <button class="btn btn-warning has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal1">
                            
                            Alert Question
                        </button>
                    </div>
                </div>
                
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <form action="#">
                        <div class="form-group col-md-12">
                            <input type="email" class="form-control" id="exampleFormControlInput1" value="Write a program to print odd numbers." readonly>
                        </div>                    
                    </form>
                    
                </div>
                <div class="col-md-3">
                    <button class="btn btn-warning">Remaining Time: 09:59</button>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Submission</h3>
                        </div>
                        <div class="card-body">
                        <div class="table">
                                <table class="table-responsive table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th scope="col">Sap Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Submission</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>11785</td>
                                            <td>Ghulam Mujtaba</td>
                                            <td><span class="badge badge-success">Submitted</span></td>
                                        </tr>
                                        <tr>
                                            <td>12042</td>
                                            <td>Inzamam</td>
                                            <td><span class="badge badge-success">Submitted</span></td>
                                        </tr>
                                        <tr>
                                            <td>13497</td>
                                            <td>Shoaib Haider</td>
                                            <td><span class="badge badge-success">Submitted</span></td>
                                        </tr>
                                        <tr>
                                            <td>11166</td>
                                            <td>Abdul Basit</td>
                                            <td><span class="badge badge-danger">Not Submitted</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <h3>Students</h3>
                        </div>
                        <div class="card-body">
                            <div class="table">
                                <table class="table-responsive table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th scope="col">Sap Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>11785</td>
                                            <td>Ghulam Mujtaba</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>12042</td>
                                            <td>Inzamam</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>13497</td>
                                            <td>Shoaib Haider</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>11166</td>
                                            <td>Abdul Basit</td>
                                            <td><span class="badge badge-danger">In-Active</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Compiler
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="codeInput">C++ Code:</label>
                                <textarea class="form-control code-input" id="codeInput" rows="22" placeholder="Enter your C++ code"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary" onclick="compileCode()">Compile & Run</button>
                            <button type="submit" style= float:right; class="btn btn-primary 1" onclick="compileCode()" >Submit</button>
                            <div class="output-container">
                                <h5>Output:</h5>
                                <pre class="output" id="output"></pre>
                            </div>
                        </div>
                    
                        <script src="{{asset('assets/js/student/jquery-3.7.0.min.js')}}"></script>

                        <script src="{{asset('assets/js/student/IDE.bundle.js')}}"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
  <!-- /.content-wrapper -->
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
                            <label class="custom-file-label" for="customFile">Attachment</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
                            <label for="threadTitle">Title</label>
                            <input type="text" class="form-control" id="threadTitle" placeholder="Enter title" autofocus="" />
                        </div>
                        <div class="form-group">
                            <label for="threadTitle">Description</label>
                            <input type="text" class="form-control" id="threadTitle" placeholder="Enter Description" autofocus="" />
                        </div>

                        <div class="custom-file form-control-sm mt-3" style="max-width: 300px;">
                            <input type="file" class="custom-file-input" id="customFile" multiple="" />
                            <label class="custom-file-label" for="customFile">Attachment</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

@endsection()