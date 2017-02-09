<?php

namespace Reestrius;

use Illuminate\Database\Eloquent\Model;

class Object extends Model
{
    

    public function properties()
    {
        return $this->belongsToMany('Reestrius\Property');
    }
}
