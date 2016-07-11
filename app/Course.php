<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'institute', 'teacher','category','series_number','episode_number','description'
    ];
}
