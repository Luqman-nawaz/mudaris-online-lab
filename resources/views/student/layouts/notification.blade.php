<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Notification</title>
    
  <link rel="stylesheet" href="{{asset('assets/css/student/FrontEnd.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/student/notification.css') }}">

  @include('student/layouts.head')

 
</head>


<body class="hold-transition sidebar-mini layout-fixed">




  <div class="notification-container">
    <div class="notification success">
      <span class="icon">&#10003;</span>
      <h2>Success!</h2>
      <p>Your action was successful.</p>
    </div>
    <div class="notification error">
      <span class="icon">&#x2716;</span>
      <h2>Error!</h2>
      <p>There was an error processing your request.</p>
    </div>
    <div class="notification warning">
      <span class="icon">&#9888;</span>
      <h2>Warning!</h2>
      <p>Be cautious with your next steps.</p>
    </div>
  </div>
</body>
</html>
  
