<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    //

    // Relationships
    public function accessType()
    {
        return $this->belongsTo('App/AccessType', 'access_type_id', 'id_access_type');
    }
}
