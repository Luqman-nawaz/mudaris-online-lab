<div class="card text-center">
    <div class="card-body">
        <pre>
          {{$code->current_answer}}
        </pre>
    </div>
    <div class="card-footer text-body-secondary">
      Started: {{$code->created_at->diffForHumans();}}
    </div>

    <h3 class="text-center m-3">Compiler Result</h3>
        <div class="card text-center">
          <div class="card-body">
              <pre>
                {{$code->compiler_result}}
              </pre>
          </div>
        </div>
</div>