<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Teacher Dashboard</title>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/dashboard.css" rel="stylesheet">
  </head>
  <body>


    <x-navbar></x-navbar>

<div class="container-fluid">
  <div class="row">
    <x-sidebar></x-sidebar>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    
        <h2 class="text-center mt-2">Add New Lab</h2>
        <form action="/create-labs" method="post">
          @csrf
          @method('post')
            <div class="container">
                <div class="form-floating m-2">
                    <select class="form-select" name="course_id" id="floatingSelect" required aria-label="Floating label select example">
                      <option selected disabled>Select Course</option>
                      @foreach(App\Models\courses::all() as $course)
                      <option value="{{$course->id}}">{{$course->course_name}}</option>
                      @endforeach
                    </select>
                    <label for="floatingSelect">Select the course of this Lab</label>
                </div>
                  
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text" id="addon-wrapping">Lab Week</span>
                      <select class="form-select" name="course_week" id="floatingSelect" required aria-label="Floating label select example">
                        <option value="Week 1">Week 1</option>
                        <option value="Week 2">Week 2</option>
                        <option value="Week 3">Week 3</option>
                        <option value="Week 4">Week 4</option>
                        <option value="Week 1">Week 5</option>
                        <option value="Week 2">Week 6</option>
                        <option value="Week 3">Week 7</option>
                        <option value="Week 4">Week 8</option>
                        <option value="Week 1">Week 9</option>
                        <option value="Week 2">Week 10</option>
                        <option value="Week 3">Week 11</option>
                        <option value="Week 4">Week 12</option>
                        <option value="Week 1">Week 13</option>
                        <option value="Week 2">Week 14</option>
                        <option value="Week 3">Week 15</option>
                        <option value="Week 4">Week 16</option>
                      </select>
                  </div>

                  <div class="form-floating m-2">
                    <select class="form-select" name="assign_task" id="floatingSelect" required aria-label="Floating label select example">
                      @foreach(App\Models\User::all() as $course)
                      <option value="{{$course->id}}">{{$course->name}}</option>
                      @endforeach
                      @foreach(App\Models\groups::all() as $course)
                      <option value="{{$course->id}}">{{$course->group_name}} (Group)</option>
                      @endforeach
                      <option value="all">All Enrolled Students</option>
                    </select>
                    <label for="floatingSelect">Assign Task</label>
                </div>
                  
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text" id="addon-wrapping">Lab Date</span>
                    <input type="date" name="updated_at" class="form-control" placeholder="E.g PHP Lab #2" required aria-label="Username" aria-describedby="addon-wrapping">
                  </div>
                  
                <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text" id="addon-wrapping">Lab Name</span>
                    <input type="text" name="name" class="form-control" placeholder="E.g PHP Lab #2" required aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap m-2">
                  <span class="input-group-text" id="addon-wrapping">Task Name</span>
                  <input type="text" name="task_name" class="form-control" placeholder="E.g PHP Echo Task" required aria-label="Username" aria-describedby="addon-wrapping">
              </div>
              <div class="input-group flex-nowrap m-2">
                <span class="input-group-text" id="addon-wrapping">Marks</span>
                <input type="text" name="grades" class="form-control" placeholder="E.g 10" required aria-label="Username" aria-describedby="addon-wrapping">
            </div>
                <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text" id="addon-wrapping">Task Description</span>
                    <textarea type="text" name="task_description" class="form-control" rows="5" required aria-label="Username" aria-describedby="addon-wrapping"></textarea>
                </div>
                <hr>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-success">Save Task</button>
                </div>
            </div>
        </form>
      
    </main>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
