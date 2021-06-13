<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{

    public $rate = [];
    public $idd;
    public $comment;
    public $rating;

    public function mount()
    {
        $this->init();
    }

    public function init()
    {
        $this->rate = Comment::where('product_id', $this->idd)->orderBy('created_at', 'desc')->limit(3)->get()->toArray();
        // dd($this->rate);
        foreach ($this->rate as $key=>$value) {
            $this->rate[$key]['user'] = User::find($value['user_id'])->toArray();
        }
    }

    public function addCmt($user)
    {
        Comment::create([
            'product_id'=>$this->idd,
            'user_id'=>$user,
            'comment'=>$this->comment,
            'rate'=>$this->rating,
        ]);
        $this->comment = '';
        $this->init();
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
