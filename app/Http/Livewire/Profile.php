<?php

namespace App\Http\Livewire;
use App\Models\Profile as ProfileModel;
use Livewire\Component;

class Profile extends Component
{
    public $pro;
    public function mount($id)
{
        $this->pro=ProfileModel::find($id);
    }
public function render()
    {
        return view('livewire.profile');
    }
}
