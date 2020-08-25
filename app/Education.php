<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'name', 'school', 'diploma', 'start_year', 'end_year'
    ];
}
