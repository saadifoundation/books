<?php

namespace App\Http\Controllers;

use App\Level;
use App\Book;
use App\User;
use App\Tag;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $levels = Level::all();
        $books = Book::all();
        $users = User::all();
        $other_books_tags = Tag::all()->whereIn('title_abbr', ['amfa', 'educational-assistance', 'teaching']);

        return view(
            'index',
            [
                'levels' => $levels,
                'books' => $books,
                'users' => $users,
                'other_books_tags' => $other_books_tags,
            ]
        );
    }
}
