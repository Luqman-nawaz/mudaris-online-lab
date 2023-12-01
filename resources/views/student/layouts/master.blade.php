<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="{{asset('assets/css/student/FrontEnd.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/student/master.css') }}">
  @include('student/layouts.head')

  


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('assets/img/MudarisLogo.jpg')}}" alt="MudarisLogo" height="60" width="80">
    
  </div>

<div>  <!-- Navbar -->
@include('student/layouts.main-headerbar')
  <!-- /.navbar -->
  </div>
  <!-- Main Sidebar Container -->
  @include('student/layouts.main-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="container">
          
        <h2>Lab Task</h2>
      
        <div id="subject-container" class="row">
            <!-- Subject cards will be rendered here -->
        </div>

        <div id="tasks-container">
            <!-- Lab tasks will be rendered here -->
        </div>

        <button id="back-btn" class="btn btn-secondary mt-4">Back</button>
    </div>
          
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
<script src="{{asset('assets/js/student/jquery-3.7.0.min.js')}}"></script>

    <script src="{{asset('assets/js/student/master.bundle.js')}}"></script>





    
    <script>



$(document).ready(function () {
    // Mock data for subjects
    var subjects = [
        { id: 1, name: "PF C++" },
        { id: 2, name: "ABC C++" },
        { id: 3, name: "DSA C++" }
    ];

    // Mock data for lab tasks
    var labTasks = {
        1: [
            { id: 1, name: "Task 1", question: "Write a program to calculate the factorial of a number.", timeLimit: "30 minutes" },
            { id: 2, name: "Task 2", question: "Write a program to find the sum of two numbers.", timeLimit: "20 minutes" },
            { id: 3, name: "Task 3", question: "Write a program to determine if a number is prime or not.", timeLimit: "15 minutes" }
        ],
        2: [
            { id: 4, name: "Task 4", question: "Write a program to calculate the velocity of an object.", timeLimit: "30 minutes" },
            { id: 5, name: "Task 5", question: "Write a program to find the force exerted by an object.", timeLimit: "20 minutes" }
        ],
        3: [
            { id: 6, name: "Task 6", question: "Write a program to balance a chemical equation.", timeLimit: "30 minutes" },
            { id: 7, name: "Task 7", question: "Write a program to calculate the molar mass of a compound.", timeLimit: "25 minutes" },
            { id: 8, name: "Task 8", question: "Write a program to determine the pH of a solution.", timeLimit: "20 minutes" }
        ]
    };

    // Render subjects
    function renderSubjects() {
        var subjectContainer = $("#subject-container");
        subjectContainer.empty();

        subjects.forEach(function (subject) {
            var card = $('<div class="col-md-4">' +
                '<div class="subject-card">' +
                '<h4>' + subject.name + '</h4>' +
                '<button class="btn btn-primary">View Tasks</button>' +
                '</div>' +
                '</div>');

            card.click(function () {
                viewTasks(subject);
            });

            subjectContainer.append(card);
        });
    }

    // Render lab tasks
    function renderTasks(tasks) {
        var tasksContainer = $("#tasks-container");
        tasksContainer.empty();

        var taskList = $('<div class="row"></div>');
        tasks.forEach(function (task) {
            var taskCard = $('<div class="col-md-6">' +
                '<div class="task-card">' +
                '<h4>' + task.name + '</h4>' +
                '<p>' + task.question + '</p>' +
                '<p><strong>Time Limit:</strong> ' + task.timeLimit + '</p>' +
                '<button class="btn btn-primary solve-btn">Solve Task</button>' +
                '</div>' +
                '</div>');

            taskCard.find(".solve-btn").click(function () {
                window.location.href="{{url('/IDE')}}"; 
            });

            taskList.append(taskCard);
        });

        tasksContainer.append(taskList);
    }

    // View tasks for a subject
    function viewTasks(subject) {
        $("#subject-container").hide();
        $("#tasks-container").show();
        $("#back-btn").show();

        var tasks = labTasks[subject.id];
        renderTasks(tasks);
    }

    // Go back to subjects
    $("#back-btn").click(function () {
        $("#tasks-container").hide();
        $("#subject-container").show();
        $("#back-btn").hide();
    });

    // Initial rendering
    renderSubjects();
    $("#tasks-container").hide();
    $("#back-btn").hide();
});
</script>
</body>
</html>


