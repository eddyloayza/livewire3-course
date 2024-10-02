<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostRow extends Component
{

    public Post $post;

    /*public function mount($post)
    {
        $this->post = $post;
    }*/

    public function archive()
    {
        $this->post->archive();
    }

    public function isNotArchive()
    {
        $this->post->isNotArchive();
    }
}
