<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //

    // Relationships
    public function subject()
    {
        return $this->belongsTo('App\Subject', 'subject_id', 'id_subject');
    }

    public function professor()
    {
        return $this->belongsToMany(
            'App\Professor',
            'lesson_has_professor',
            'lesson_id',
            'professor_id'
        );
    }

}
