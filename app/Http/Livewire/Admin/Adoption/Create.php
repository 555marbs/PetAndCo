<?php

namespace App\Http\Livewire\Admin\Adoption;

use App\Models\Adoption;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

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

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Adoption') ])]);
        
        if($this->getPropertyValue('image') and is_object($this->image)) {
            $this->image = $this->getPropertyValue('image')->store('image');
        }

        Adoption::create([
            'title' => $this->title,
            'content' => $this->content,
            'contact' => $this->contact,
            'image' => $this->image,            
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.adoption.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Adoption') ])]);
    }
}
