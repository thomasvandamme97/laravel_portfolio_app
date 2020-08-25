<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $fillable = [
        'title', 'company', 'description', 'start_year', 'end_year'
    ];
}
