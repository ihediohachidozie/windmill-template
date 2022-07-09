<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Body extends Component
{
    public  $isSideMenuOpen = false;

    protected $listeners = ['toggleSideMenu'];

    public function toggleSideMenu()
    {
        
        $this->isSideMenuOpen = !$this->isSideMenuOpen;

    }
    public function render()
    {
        return view('livewire.body');
    }
}
