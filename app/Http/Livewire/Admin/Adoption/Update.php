<?php

namespace App\Http\Livewire\Admin\Adoption;

use App\Models\Adoption;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $adoption;

    public $title;
    public $content;
    public $contact;
    
    protected $rules = [
        'title' => 'required|max:40',
        'content' => 'required|max:255',
        'contact' => 'required|max:40',        
    ];

    public function mount(Adoption $Adoption){
        $this->adoption = $Adoption;
        $this->title = $this->adoption->title;
        $this->content = $this->adoption->content;
        $this->contact = $this->adoption->contact;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Adoption') ]) ]);
        
        $this->adoption->update([
            'title' => $this->title,            'content' => $this->content,            'contact' => $this->contact,            
        ]);
    }

    public function render()
    {
        return view('livewire.admin.adoption.update', [
            'adoption' => $this->adoption
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Adoption') ])]);
    }
}
