 @extends('instructor/my_layouts.main')
 @section('main-section')
 <head>
  <title>
    Mudaris Dashboard
  </title>
 </head>
 <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="img/mudaris.png" alt="Mudaris Logo" height="60" width="60">
  </div>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->


          <!--Dashboard    -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Mudaris Online Lab</a></li>
              <li class="breadcrumb-item active"><a href="{{route('index')}}">Dashboard</a></li>
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
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>15</h3>

                <p>Total Courses</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="{{route('active_courses')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>8<sup style="font-size: 20px"></sup></h3>

                <p>Completed Courses</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>5</h3>

                <p>Active Courses</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{route('active_courses')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>09</h3>

                <p>Pending Queries</p>
              </div>
              <div class="icon">
                <i class="fas fa-comments"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="content">
          <div class="container-fluid" style="height= 100px">
            
              <div class="row">
                <div class="col-md-12">
                  <div class="card1">
                    <div class="card1-header">
                      <i class="fas fa-book"></i> My Courses
                    </div>
                    <div class="scrollable-conatiner" style="max-height: 300px; overflow-y: auto">
                      <div class="row d-flex course p-2    justify-content-between">
                        <div class="col-2 mt-2"><img src="img/photo1.png" alt="cousre"></div>
                        <div class="col-6 mt-3">
                          <a href=#>
                            <h5>Web Engineering</h5>
                          </a>
                          </div>
                        <div class="col-2 mt-3">
                        <p>45 <i class="fas fa-user"></i> </p>
                        </div>
                        <div class="col-2 mt-3">
                          <p class="badge bg-success">Inprogress <i class="fa-solid fa-bars-progress"></i></p>
                        </div>
                      </div>

                      <div class="row d-flex course p-2    justify-content-between">
                        <div class="col-2 mt-2"><img src="img/photo1.png" alt="cousre"></div>
                        <div class="col-6 mt-3">
                          <a href=#>
                            <h5>Programming Fundamentals</h5>
                          </a>
                          </div>
                        <div class="col-2 mt-3">
                        <p>30 <i class="fas fa-user"></i> </p>
                        </div>
                        <div class="col-2 mt-3">
                          <p class="badge bg-warning">Completed <i class="fa-solid fa-ballot-check"></i></p>
                        </div>
                        
                      </div>
                      <div class="row d-flex course p-2    justify-content-between">
                        <div class="col-2 mt-2"><img src="img/photo1.png" alt="cousre"></div>
                        <div class="col-6 mt-3">
                          <a href=#>
                            <h5>Programming Fundamentals</h5>
                          </a>
                          </div>
                        <div class="col-2 mt-3">
                        <p>30 <i class="fas fa-user"></i> </p>
                        </div>
                        <div class="col-2 mt-3">
                          <p class="badge badge-lg bg-warning">Completed <i class="fa-solid fa-ballot-check"></i></p>
                        </div>
                      </div>
                        
                      </div>         
                 </div>
              </div>
           </div>
        </div>
      </div>
     
</div>

    </section>
  </div>
        <!-- Main row -->
    <script type="text/javascript">
    document.getElementById("editp").addEventListener("click", function() {
        document.querySelector(".popup").style.display = "flex";
    });
    document.querySelector(".popup .close").addEventListener("click", function() {
        document.querySelector(".popup").style.display = "none";
    });
    </script>

</div>

 @endsection()
    