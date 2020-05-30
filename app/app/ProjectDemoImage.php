<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectDemoImage extends Model
{
    protected $guarded = [];

    public function projectDemo()
    {
        return $this->belongsTo('App\ProjectDemo');
    }
}
