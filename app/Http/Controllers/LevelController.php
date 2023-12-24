<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\View\View;

class LevelController extends Controller
{
    public function show(Level $level): View
    {
        $levels = Level::all();
        foreach ($levels as $each_level) {
            $each_level->width = ($each_level->order * 15) > 100 ? 100 : $each_level->order * 15;
        }

        return view('levels.show', [
            'level' => $level,
            'levels' => $levels,
        ]);
    }
}
