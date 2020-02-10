<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    protected $casts = [
        'urls' => 'array',
        'image_urls' => 'array',
        'tags' => 'array',
    ];
}
