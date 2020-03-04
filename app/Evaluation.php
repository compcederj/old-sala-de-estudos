<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    //

    // Relationships
    public function subject()
    {
        return $this->belongsTo('App\Subject', 'subject_id', 'id_subject');
    }

    public function evaluationKey()
    {
        return $this->belongsTo('App\EvaluationKey', 'evaluation_key_id', 'id_evaluation_key');
    }
}
