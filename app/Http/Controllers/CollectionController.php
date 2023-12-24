<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Level;
use Illuminate\View\View;

class CollectionController extends Controller
{
    public function show(Collection $collection): View
    {
        $levels = Level::all();

        return view('collections.show', [
            'collection' => $collection,
            'levels' => $levels,
        ]);
    }
}
