<?php

namespace App\Http\Controllers;

use App\Level;
use App\Book;
use App\User;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $levels = Level::all();
        $books = Book::all();
        $users = User::all();

        return view(
            'index',
            [
                'levels' => $levels,
                'books' => $books,
                'users' => $users,
            ]
        );
    }
}
