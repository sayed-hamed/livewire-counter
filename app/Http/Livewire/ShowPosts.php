<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public $count=1;
    public function render()
    {
        return view('livewire.show-posts');
    }

    public function add(){
        $this->count++;
    }

    public function sub(){
        $this->count--;
    }
}
