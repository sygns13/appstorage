<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{
    //parametros
    /* public $titulo;
    public function mount($title){

        $this->titulo = $title;

    } */

    //pasar parametros
    /* public $name;

    public function mount($name){

        $this->name = $name;

    } */

    public $search = "";
    public $sort = "id";
    public $direction = "desc";

    //protected $listeners = ['render' => 'render'];
    protected $listeners = ['render'];

    public function render()
    {
        /* Si quiero que exienda de otro layout que no sea app.blade.php
        return view('livewire.show-posts')
            ->layout('layouts.base'); */

        $posts = Post::where('title', 'like', '%'.$this->search.'%')
                        ->orWhere('content', 'like', '%'.$this->search.'%')
                        ->orderBy($this->sort, $this->direction)
                        ->get();

        return view('livewire.show-posts',compact('posts'));
    }

    public function order($sort){
        if($this->sort == $sort){
            if($this->direction == 'desc'){
                $this->direction = 'asc';
            }
            else{
                $this->direction = 'desc';
            }
        }
        else{
            $this->sort = $sort;
        }
    }
}
