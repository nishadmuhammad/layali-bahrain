<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opening extends Model
{
    protected $guarded=[];
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
