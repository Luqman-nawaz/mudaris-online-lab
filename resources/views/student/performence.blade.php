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
      <h3 class="text-center mt-3">My Performence</h3>
      <div class="container">
        <div class="table-responsive small">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Labs Score</th>
                <th scope="col">Course Grade</th>
              </tr>
            </thead>
            <tbody>
              @foreach($performences as $performence)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$performence->lab->lab_name}}</td>
                    <td>{{$performence->score}}</td>
                    <td>A+</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>