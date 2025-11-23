<?php

namespace App\Http\Controllers;

use App\Models\Flashcard;
use App\Models\Topic;
use App\Models\Subtopic;
use Illuminate\Http\Request;

class FlashcardController extends Controller
{
    public function index()
    {
        $topics = Topic::all();
        $flashcards = Flashcard::with(['topic', 'subtopic'])->latest()->paginate(10);

        return view('flashcards.index', compact('flashcards', 'topics'));
    }

    public function create()
    {
        $topics = Topic::with('subtopics')->get();

        return view('flashcards.create', compact('topics'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'topic_id'    => 'required|exists:topics,id',
            'subtopic_id' => 'nullable|exists:subtopics,id',
            'front'       => 'required|string',
            'back'        => 'required|string',
            'extra'       => 'nullable|string',
            'source'      => 'nullable|string',
        ]);

        Flashcard::create($data);

        return redirect()
            ->route('flashcards.index')
            ->with('success', 'Tarjeta creada correctamente.');
    }
    public function edit(Flashcard $flashcard)
{
    $topics = Topic::with('subtopics')->get();

    return view('flashcards.edit', compact('flashcard', 'topics'));
}

public function update(Request $request, Flashcard $flashcard)
{
    $data = $request->validate([
        'topic_id'    => 'required|exists:topics,id',
        'subtopic_id' => 'nullable|exists:subtopics,id',
        'front'       => 'required|string',
        'back'        => 'required|string',
        'extra'       => 'nullable|string',
        'source'      => 'nullable|string',
    ]);

    $flashcard->update($data);

    return redirect()
        ->route('flashcards.index')
        ->with('success', 'Tarjeta actualizada correctamente.');
}

public function destroy(Flashcard $flashcard)
{
    $flashcard->delete();

    return redirect()
        ->route('flashcards.index')
        ->with('success', 'Tarjeta eliminada correctamente.');
}

}
