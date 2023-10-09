<?php

namespace App\Http\Livewire;
use Livewire\Component;

class LivewireView extends Component
{
    public $country;

    public function render(){
        return view('livewire-view');
    }
}