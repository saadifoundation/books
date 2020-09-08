<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Level;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return $book->users()->where('title_abbr', 'writer')->get();
        return count($book->users->where('title_abbr', 'writer'));
        $levels = Level::all();
        foreach ($levels as $level) {
            $level->width = ($level->order * 15) > 100 ? 100 : $level->order * 15;
        }
        
        //create an array for book's levels' title_abbr
        $book_levels_title_abbrs = [];
        foreach ($book->levels as $book_level) {
            array_push($book_levels_title_abbrs, $book_level->title_abbr);
        }
        
        return view(
            'books.show',
            [
            'book' => $book,
            'levels' => $levels,
            'book_levels_title_abbrs' => $book_levels_title_abbrs,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
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
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
