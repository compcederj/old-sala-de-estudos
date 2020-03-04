<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    //

    // Relationships
    public function subject()
    {
        return $this->belongsToMany(
            'App\Subject',
            'subject_has_professor',
            'professor_id',
            'subject_id'
        );
    }

    public function lesson()
    {
        return $this->belongsToMany(
            'App\Lesson',
            'lesson_has_professor',
            'professor_id',
            'lesson_id'
        );
    }
}
