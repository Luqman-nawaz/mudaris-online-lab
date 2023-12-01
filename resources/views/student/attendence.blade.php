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
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title mt-3">Attendance Sheet</h4>
                    </div>
                </div>
                <div class="row filter-row">
                <div class="row mt-3">
                    <div class="col-lg-12">
						<div class="table-responsive">
                            <table class="table table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Lab Name</th>
                                        <th>Attendence</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($performences as $performence)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$performence->lab->lab_name}}</td>
                                        <td>{{$performence->attendence}}</td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
						</div>
                    </div>
                </div>
            </div>
            

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>