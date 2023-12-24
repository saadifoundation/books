<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\View\View;

class TagController extends Controller
{
    public function show(Tag $tag): View
    {
        return view('tags.show', [
            'tag' => $tag,
        ]);
    }
}
