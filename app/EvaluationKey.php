<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluationKey extends Model
{
    //

    // Relationships
    public function evaluation()
    {
        return $this->hasMany('App/Evaluation', '', '');
    }
}
