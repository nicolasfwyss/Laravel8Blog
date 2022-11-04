<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Backend\PostController;
use App\Models\Post;
use Livewire\Component;

class EditModal extends Component
{

    public $showModal = false;
    public $post;

    protected $rules = [
        'post.title' => 'required',
        'post.body' => 'required',
    ];

    public function render()
    {
        return view('livewire.edit-modal');
    }

    public function save()
    {
        $this->validate();
        Post::withTrashed()->find($this->post['id'])->update($this->post);
            // action
        $this->showModal = false;
        $this->emit('post-updated');
    }
}
