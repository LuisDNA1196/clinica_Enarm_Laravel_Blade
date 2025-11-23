<?php

namespace App\Http\Controllers;

use App\Models\Topic;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::withCount('subtopics')->get();

        return view('topics.index', compact('topics'));
    }

    public function show(Topic $topic)
    {
        $topic->load('subtopics');

        return view('topics.show', compact('topic'));
    }
}
