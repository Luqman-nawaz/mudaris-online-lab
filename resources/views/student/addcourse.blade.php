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
            <div class="col-4">
                <div class="card mt-3" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Use Key to Join</h5>
                      <form action="/student/course/key/" method="post">
                          @csrf
                          @method('post')
                        <input class="form-control" name="course_key" placeholder="Enter Course Key" />
                        <button type="submit" class="btn btn-success mt-3">Join Course</button>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <h3 class="text-center">Explore Courses</h3>
            @foreach(App\Models\courses::all() as $course)
            <div class="col-4">
                <div class="card mt-3" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$course->course_name}}</h5>
                      <p class="card-text">{{$course->course_description}}</p>
                    </div>
                  </div>
            </div>
            @endforeach
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>