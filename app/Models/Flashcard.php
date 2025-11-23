<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flashcard extends Model
{
    protected $fillable = [
        'topic_id',
        'subtopic_id',
        'front',
        'back',
        'extra',
        'source',
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function subtopic()
    {
        return $this->belongsTo(Subtopic::class);
    }
}
