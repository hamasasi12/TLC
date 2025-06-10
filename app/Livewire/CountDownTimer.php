<?php

namespace App\Livewire;

use Livewire\Component;

class CountDownTimer extends Component
{

    public $endTime;

    public function mount()
    {
        $this->endTime = session('quiz_end_time') ?? now()->addMinutes(10);
        session(['quiz_end_time' => $this->endTime]);
    }
    
    public function render()
    {
        return view('livewire.count-down-timer');
    }
}
