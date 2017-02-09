<?php

namespace Reestrius;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function objects()
    {
        return $this->belongsToMany('Reestrius\Object');
    }

    public function values()
    {
        return $this->hasMany('Reestrius\Value');
    }
}
