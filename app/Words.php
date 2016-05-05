<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Words extends Model
{
    protected $fillable = [
    	'word',
    	'value'
    ];

}
