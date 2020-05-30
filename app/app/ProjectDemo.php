<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectDemo extends Model
{
    protected $guarded = [];
    public function images()
    {
        return $this->hasMany('App\ProjectDemoImage');
    }
}
