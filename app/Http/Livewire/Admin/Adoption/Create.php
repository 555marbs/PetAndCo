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
    
    protected $rules = [
        'title' => 'required|max:40',
        'content' => 'required|max:255',
        'contact' => 'required|max:40',        
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
        
        Adoption::create([
            'title' => $this->title,            'content' => $this->content,            'contact' => $this->contact,            
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.adoption.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Adoption') ])]);
    }
}
