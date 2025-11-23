<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
        'subtopic_id',
        'type',
        'title',
        'url',
        'description',
    ];

    public function subtopic()
    {
        return $this->belongsTo(Subtopic::class);
    }
}
