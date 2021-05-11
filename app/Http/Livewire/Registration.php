<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Throwable;

class Registration extends Component
{
    public $name;
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';
    
    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|same:passwordConfirmation',
    ];
    
    public function updated($fields) {
        $this->validateOnly($fields);
    }
    
    public function save() {
        $attr = $this->validate();
        
        try {
            User::create([
                'name' => $attr['$name'],
                'email' => $attr['$email'],
                'password' => Hash::make($attr['$password']),
            ]);
            
            $this->dispatchBrowserEvent('message', 'Registration Success');
            $this->reset();
        } catch (Throwable $e) {
            $this->dispatchBrowserEvent('message', $e->getMessage());
        }
    }
    
    public function render()
    {
        return view('livewire.registration');
    }
}
