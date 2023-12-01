<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <x-studentnavbar></x-studentnavbar>
      <div class="container">
    
        @if ($message = Session::get('error'))
        <div class="alert alert-danger">
                <p class="text-center">{{ $message }}</p>
        </div>
        @endif
        <h3 class="text-center">Registered Courses</h3>
        <div class="row">
          @foreach(App\Models\student_courses::where('student_id', Auth::id())->get() as $course)
          <div class="col-4">
              <div class="card mt-3" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">{{$course->course->course_name}}</h5>
                    <p class="card-text">{{$course->course->course_description}}</p>
                    <a href="/student/labs/{{$course->id}}" class="btn btn-primary">View Lab</a>
                  </div>
                </div>
          </div>
        @endforeach
            
        <h3 class="text-center mt-3">Pending Labs</h3>
        <div class="row">
          @foreach(App\Models\student_courses::where('student_id', Auth::id())->get() as $course)
          @foreach($course->course->labs as $lab)
              <div class="col-4">
                  <div class="card mt-3" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">{{$lab->course->course_name}}</h5>
                        <hr>
                      <h5 class="card-title">{{$lab->lab_name}}</h5>
                      <p class="card-text">{{$lab->task_description}}</p>
                      <a href="/student/lab/{{$lab->id}}/live" class="btn btn-primary">View Lab</a>
                      </div>
                  </div>
              </div>
          @endforeach
        @endforeach
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>