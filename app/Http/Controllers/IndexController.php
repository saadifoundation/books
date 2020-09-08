<?php

namespace App\Http\Controllers;

use App\Level;
use App\Book;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $levels = Level::all();
        foreach ($levels as $level) {
            $level->width = ($level->order * 15) > 100 ? 100 : $level->order * 15;
        }
        $books = Book::all();
        
        return view(
            'index',
            [
                'levels' => $levels,
                'books' => $books,
            ]
        );
    }
}
