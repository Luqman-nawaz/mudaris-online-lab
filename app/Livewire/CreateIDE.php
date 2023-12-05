<?php

namespace App\Livewire;

use App\Models\labstudents;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CreateIDE extends Component
{

    public $code = '';

    public $labid = '';

    public $co = '';

    public function mount($labid = null, $co = null)
    {
        $this->labid = $labid;
        $this->co = $co;
    }
 
    public function save()
    {
        $response = Http::post('https://api.jdoodle.com/v1/execute', [
            'clientId' => '81e32057bcd555d2a35874106c223149',
            'clientSecret' => '4bd22967ea884668da14d25da76a43a524db5f5a9357b0a55fc933e5503e6aef',
            'script' => $this->code,
            'versionIndex' => '0',
            'language' => 'php',
        ]);

        $result = $response->object();
        if(empty($result->output)){
            $output = $result->error;
        }else{
            $output = $result->output;
        }
        
        labstudents::where('user_id', Auth::id())->where('lab_id', $this->labid)->update(['current_answer' => $this->code, 'compiler_result' => $output]);
        dd($output);
    }

    public function render()
    {
        return view('livewire.create-i-d-e');
    }
}
