<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Flashcard;

class HomeController extends Controller
{
    public function index()
    {
        $topicsCount = Topic::count();
        $flashcardsCount = Flashcard::count();

        return view('home', compact('topicsCount', 'flashcardsCount'));
    }
}
