<?php

namespace App\Http\Livewire\Mortuary;

use App\Models\User;
use App\Models\Person;
use Livewire\Component;

class CreateDisbursement extends Component
{
    public $total_contributors = 0, $contribution = 10;

    public User $user;
    
    public Person $person;

    public $search_option = 'name';
    public $search_keyword;
    public $search_person_results = [];

    public function render()
    {
        return view('livewire.mortuary.create-disbursement')->layout('layouts.admin');
    }

    public function mount()
    {
        $this->total_contributors = User::role('user')->count();
    }

    public function search()
    {
        $this->search_person_results = Person::searchName($this->search_keyword)->get();
    }

    public function selectPerson($id)
    {
        $this->person = Person::find($id);
        $this->user = $this->person->user;
    }
}
