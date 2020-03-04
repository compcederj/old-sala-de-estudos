<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //

    // Relationships
    public function lesson()
    {
        return $this->hasMany('App\Lesson');
    }

    public function professor()
    {
        return $this->belongsToMany(
            'App\Professor',
            'subject_has_professor',
            'subject_id',
            'professor_id'
        );
    }

    public function evaluation()
    {
        return $this->hasMany('App\Evaluation');
    }
}
