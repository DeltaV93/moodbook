<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Entry extends Model
{
    protected $fillable = [
    	'entry_title',
    	'colorbox',
    	'body_entry',
    	'tag_field'
    ];

}

