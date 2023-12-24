<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Level;
use App\Models\Tag;
use App\Models\User;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        $levels = Level::all();
        $books = Book::all();
        $users = User::all();
        $other_books_tags = Tag::all()->whereIn('title_abbr', ['enrichment', 'how-to-teach']);

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
