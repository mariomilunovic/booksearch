<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use App\Models\Book;

class Search extends Component
{

    public $books;
    public $query;
    public $age = 10000;


    public function mount() // pri učitavanju stranice prikaži sve knjige filtrirane po starosti
    {
        $this->books = Book::whereYear('published_at','>',date('Y')-$this->age)->get();
    }

    public function updated($query,$age) //u slučaju promene promenljivih na frontendu
    {
        if(!($this->query)) //ako je prazan query prikaži sve knjige filtrirane po starosti
        {
            $this->books = Book::orderBy('published_at','desc')->whereYear('published_at','>',date('Y')-$this->age)->get();
        }
        else
        {
            $this->books = Book::where('title','like','%'.$this->query.'%')->whereYear('published_at','>',date('Y')-$this->age)->orderBy('published_at','desc')->get();
        }
    }

    public function render()
    {
        return view('livewire.book.search');
    }
}
