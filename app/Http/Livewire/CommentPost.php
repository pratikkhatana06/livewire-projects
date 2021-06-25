<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CommentPost extends Component
{
    public $comments = [
        [
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et.'
        ]
    ];

    public function addComment()
    {
        $this->comments[] = [
            'body' => 'New test'
        ];
    }

    public function render()
    {
        return view('livewire.comment-post');
    }
}
