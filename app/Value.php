<?php

namespace Reestrius;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    public function property()
    {
        return $this->belongsTo('Reestrius\Property');
    }
}
