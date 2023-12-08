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

    public function render()
    {
        $this->code = labstudents::Where('id', $this->studentid)->get()->first(); 
        return view('livewire.fetchcode');
    }
}
