<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $isProfileMenuOpen, $isSideMenuOpen, $isNotificationsMenuOpen = false;
    public $dark = false;

    public function toggleProfileMenu()
    {
        $this->isProfileMenuOpen = !$this->isProfileMenuOpen;
  
    }

    public function toggleNotificationsMenu()
    {
       // dd('hello world');
        $this->isNotificationsMenuOpen = !$this->isNotificationsMenuOpen;
    }


    public function toggleTheme()
    {
       // dd('hello world');
        $this->dark = !$this->dark;
    }
    public function render()
    {
        return view('livewire.header');
    }
}
