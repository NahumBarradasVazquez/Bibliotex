<?php

namespace App\Livewire;
use App\models\libros;
use Livewire\WithPagination;
use Livewire\Component;

class SearchLibros extends Component
{

    use WithPagination;
    //public $libros;
    public $searchTerm;

    public function render()
    {
        $libros = $this -> searchTerm
        ? libros::where('titulo', 'LIKE', "$this->searchTerm") -> paginate(10)
        : libros::paginate(10);
        return view('livewire.search-libros', ['libros' => $libros]);
    }
    public function filtrado()
    {
        $libros = $this -> searchTerm
        ? libros::where('clasificacion', 'LIKE', '$this->searchTerm') -> paginate(10)
        : libros::paginate(10);
        return view('livewire.search-libros', ['libros' => $libros]);
    }
    /*
    public function mount()
    {
        $this -> libros = Post::all();
    }
    */
    public function search()
    {
        //$this -> libros = Post::where('titulo', 'LIKE', "%$this->searchTerm%")->
        //orWhere('descripcion', 'like', 'LIKE', "%$this->searchTerm%")->get();
        $this->render();
    }
    public function filtrar()
    {
        $this->filtrado();
    }
}
