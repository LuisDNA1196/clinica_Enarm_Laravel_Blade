<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function subtopics()
    {
        return $this->hasMany(Subtopic::class);
    }

    public function flashcards()
    {
        return $this->hasMany(Flashcard::class);
    }
}
