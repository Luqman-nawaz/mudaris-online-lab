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
        <h3 class="text-center mt-3">Current Labs  - Total Marks: {{$lab->marks}}</h3> 
          
        <div class="row">
            <div class="col-6">
              <h2 class="display-5 link-body-emphasis mb-1">{{$lab->lab_name}}</h2>
              <p class="blog-post-meta">{{$lab->created_at->diffForHumans();}} <a href="#">{{Auth::user()->name}}</a></p>
  
              <p>{{$lab->task_description}}</p>
              @if(App\Models\labstudents::where('user_id', Auth::id())->where('lab_id', $lab->id)->get()->isNotEmpty())
                  @php $co = App\Models\labstudents::where('user_id', Auth::id())->where('lab_id', $lab->id)->get()->first()->current_answer; @endphp
              @else
                  @php $co = " "; @endphp
              @endif
              <livewire:create-i-d-e :labid="$lab->id" :currentanswer="$co"/>
              <form action="/student/submit" method="post">
                @csrf
                @method('post')
                <button class="btn btn-block btn-success m-2"> Submit </button>
                <small>(Your last compiled code & result will be submitted)</small>
              </form>
              <button class="btn btn-block btn-primary m-2"  data-bs-toggle="modal" data-bs-target="#staticBackdrops"> View Compiler Result </button>
            </div>
            <div class="col-6">
              <h3 class="text-center">Live Chat</h3>
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Class Chat</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Group Chat</button>
                </div>
              </nav>
              
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
              <div class="card m-3">
                <div class="card-body">
                  <ul>
                    @foreach(App\Models\chat::where('lab_id', $lab_id)->where('group', 'class')->get() as $chat)
                          <li class="m-2"><b>@if($chat->group == 'teacher') {{App\Models\teacher::where('id', $chat->user_id)->get()->first()->name }} @else {{$chat->user->name}} @endif:</b> <Span @if($chat->group == 'teacher') style="color:red;" @endif>{{$chat->message}}</Span></li>
                    @endforeach
                  </ul>
                  <form action="/chat" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="message" class="form-control" placeholder="Send a message" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <input type="text" style="display: none;" name="lab_id" value="{{$lab->id}}" />
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Send Message</button>
                    </div>
                  </form>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Teacher's Feedback</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
              <div class="card m-3">
                <div class="card-body">
                  <ul>
                    @foreach(App\Models\chat::where('lab_id', $lab_id)->where('group', 'group')->get() as $chat)
                          <li class="m-2"><b>@if($chat->group == 'teacher') {{App\Models\teacher::where('id', $chat->user_id)->get()->first()->name }} @else {{$chat->user->name}} @endif:</b> <Span @if($chat->group == 'teacher') style="color:red;" @endif>{{$chat->message}}</Span></li>
                        @endforeach
                  </ul>
                  <form action="/groupchat" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="message" class="form-control" placeholder="Send a message" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <input type="text" style="display: none;" name="lab_id" value="{{$lab->id}}" />
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Send Message</button>
                    </div>
                </form>
                </div>

               
              </div>
                </div>
              </div>
              
              <div class="card">
                <div class="card-body">
                  {{App\Models\labstudents::where('user_id', $user_id)->where('lab_id', $lab_id)->get()->first()->teacher_feedback}}
                </div>
              </div>
              
            </div>
        </div>

        <hr>
        @if(App\Models\users_groups::where('user_id', Auth::id())->get()->isNotEmpty())
          @if(App\Models\groups::where('course_id', $lab->course->id)->get()->isNotEmpty())
          @php
            $group_id = App\Models\users_groups::where('user_id', Auth::id())->get()->first()->group_id;
          @endphp
          
          <div class="row mb-3">
            <h3 class="text-center mb-3">Group Students</h3>
            @foreach(App\Models\users_groups::where('group_id', $group_id)->get() as $ugroups)
                    
            <div class="col-4">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{App\Models\User::where('id', $ugroups->user_id)->get()->first()->name}}</h5>
                </div>
              </div>
            </div>

            @endforeach
          </div>
          @endif
        @endif
    </div>

    <div class="modal fade" id="staticBackdrops" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Compiler Result</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            {{App\Models\labstudents::where('user_id', $user_id)->where('lab_id', $lab_id)->get()->first()->compiler_result}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Change Code</button>
          </div>
        </div>
      </div>
    </div>


    <form id="idleform" action="/idle" method="post">
      @csrf
      <input type="text" name="student_id" style="display: none;" value="{{Auth::id()}}"/>
      <input type="text" name="lab_id" style="display: none;" value="{{$lab->id}}"/>
      <input type="text" name="teacher_id" style="display: none;" value="{{$lab->course->id}}"/>
      <input type="text" name="course_id" style="display: none;" value="{{$lab->course->teacher->id}}"/>
    </form>
    <script>
      var timeout;
        document.onmousemove = function(){
          clearTimeout(timeout);
          timeout = setTimeout(function(){
            alert("Move your mouse, you've been recorded as idle. Focus on your work please!");
            document.getElementById('idleform').submit();
          }, 60000);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>