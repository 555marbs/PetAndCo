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
    public $image;
    
    protected $rules = [
        'title' => 'required|max:100',
        'content' => 'required',
        'contact' => 'required',
        'image' => 'required',        
    ];

    public function mount(Adoption $Adoption){
        $this->adoption = $Adoption;
        $this->title = $this->adoption->title;
        $this->content = $this->adoption->content;
        $this->contact = $this->adoption->contact;
        $this->image = $this->adoption->image;        
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
        
        if($this->getPropertyValue('image') and is_object($this->image)) {
            $this->image = $this->getPropertyValue('image')->store('/storage/image');
        }

        $this->adoption->update([
            'title' => $this->title,
            'content' => $this->content,
            'contact' => $this->contact,
            'image' => $this->image,            
        ]);
    }

    public function render()
    {
        return view('livewire.admin.adoption.update', [
            'adoption' => $this->adoption
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Adoption') ])]);
    }
}
