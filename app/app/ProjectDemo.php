<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectDemo extends Model
{
    protected $guarded = [];
    protected $with = ['images'];


    public function images()
    {
        return $this->hasMany('App\ProjectDemoImage');
    }
}
