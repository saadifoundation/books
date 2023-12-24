<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Level;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        $books = Book::all();

        return view('books.index', [
            'books' => $books,
        ]);
    }

    public function show(Book $book): View
    {
        $levels = Level::all();

        return view(
            'books.show',
            [
                'book' => $book,
                'levels' => $levels,
            ]
        );
    }
}
