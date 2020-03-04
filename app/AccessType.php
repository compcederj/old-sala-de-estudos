<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessType extends Model
{
    //

    // Relationships
    public function access()
    {
        return $this->hasMany('Access');
    }
}
