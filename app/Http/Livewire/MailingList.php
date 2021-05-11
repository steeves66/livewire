<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MailingList extends Component
{
    public $email;
    public $succes;
    protected $rules = [
        'email' => 'required|email',
    ];
    
    public function formSubmit() {
        $email = $this->validate();
        $this->success = 'NOK';
        if(is_null(MailingList::where('email', $this->email)->first())) {
            MailingList::create(['email' => $this->email]);
        }
        clearFields();
    }
    
    public function clearFields() {
        $this->email = '';
    }
    
    public function render()
    {
        return view('livewire.mailing-list');
    }
}