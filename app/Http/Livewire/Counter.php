<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 1;

    public function inc()
    {
        $this->counter++;
    }

    public function dec()
    {
        $this->counter--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
