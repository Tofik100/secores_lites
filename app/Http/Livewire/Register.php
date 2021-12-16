<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Register extends Component
{

    public $email, $password, $name;
   

    public function render()
    {
        return view('livewire.admin.registerstore');
    }

    public function registerStore()
    {   

        // $data = User::all();

        // return $data;

        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required| confirmed',
        ]);

        $this->password = Hash::make($this->password); 

        User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password]);

        session()->flash('message', 'Your register successfully Go to the login page.');

        $this->resetInputFields();
  
}
}
