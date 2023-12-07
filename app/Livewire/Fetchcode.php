<?php

namespace App\Livewire;

use App\Models\labstudents;
use Livewire\Component;

class Fetchcode extends Component
{
    public $code;

    public $studentid = 0;

    public function mount($studentid = null)
    {
        $this->studentid = $studentid;
    }

    public function save(){
        $this->code = labstudents::Where('id', $this->studentid)->get()->first(); 
    }

    public function render()
    {
        return view('livewire.fetchcode');
    }
}
