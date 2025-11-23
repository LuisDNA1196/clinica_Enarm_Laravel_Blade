<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subtopic extends Model
{
    protected $fillable = [
        'topic_id',
        'title',
        'summary',
        'content',
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function resources()
    {
        return $this->hasMany(Resource::class);
    }

    public function flashcards()
    {
        return $this->hasMany(Flashcard::class);
    }
}
