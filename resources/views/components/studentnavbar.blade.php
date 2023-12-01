<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body"data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/student/dashboard">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/student/course/add">Register New Course</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/student/performence">See Performence</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/student/attendence">See Attendence</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/student/labs">See Labs</a>
            </li>
      </ul>
      
      <li class="nav-item">
        <span style="color:white; margin-right:10px;">{{Auth::user()->name}}</span>
      </li>
      <form action="{{route('logout')}}" method="post" class="d-flex" role="search">
        
        @csrf
        @method('post')
        <button class="btn btn-danger" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>