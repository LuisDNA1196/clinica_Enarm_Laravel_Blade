<?php

namespace App\Http\Controllers;

use App\Models\Subtopic;

class SubtopicController extends Controller
{
    public function show(Subtopic $subtopic)
    {
        $subtopic->load(['topic', 'resources', 'flashcards']);

        return view('subtopics.show', compact('subtopic'));
    }
}
