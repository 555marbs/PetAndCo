<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $post;

    public $title;
    public $content;
    public $image;
    
    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',        
    ];

    public function mount(Post $Post){
        $this->post = $Post;
        $this->title = $this->post->title;
        $this->content = $this->post->content;
        $this->image = $this->post->image;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Post') ]) ]);
        
        if($this->getPropertyValue('image') and is_object($this->image)) {
            $this->image = $this->getPropertyValue('image')->store('image');
        }

        $this->post->update([
            'title' => $this->title,
            'content' => $this->content,
            'image' => $this->image,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.post.update', [
            'post' => $this->post
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Post') ])]);
    }
}
