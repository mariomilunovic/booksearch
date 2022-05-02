<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Excel;
use App\Imports\BookImport;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if( request()->is('api/*'))
        {
            $books = Book::orderBy('published_at','desc')->get();
            return $books;
        }
        else
        {
            $books = Book::orderBy('published_at','desc')->paginate(5);
            return view ('models.book.index')
            ->with('books',$books);
        }
    }

    public function import()
    {

        return view('models.book.import');
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|max:255'
        ]);

        Excel::import(new BookImport,$request->file);
        toast()->success('Uspešan unos knjiga u bazu')->push();
        return redirect(route('book.index'));
    }

    public function search(Request $request)
    {
        if( request()->is('api/*'))
        {

            return $request->searchString;
        }
        else
        {
            $books = Book::orderBy('updated_at','desc')->paginate(5);
            return ('blade');
        }
    }

    public function livewire_search()
    {
        return view('models.book.search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        if( request()->is('api/*'))
        {

            return $book;
        }
        else
        {
            $books = Book::orderBy('updated_at','desc')->paginate(5);
            return ('blade');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}