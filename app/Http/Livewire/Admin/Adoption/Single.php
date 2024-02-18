<?php

namespace App\Http\Livewire\Admin\Adoption;

use App\Models\Adoption;
use Livewire\Component;

class Single extends Component
{

    public $adoption;

    public function mount(Adoption $Adoption){
        $this->adoption = $Adoption;
    }

    public function delete()
    {
        $this->adoption->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Adoption') ]) ]);
        $this->emit('adoptionDeleted');
    }

    public function render()
    {
        return view('livewire.admin.adoption.single')
            ->layout('admin::layouts.app');
    }
}
