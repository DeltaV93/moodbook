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
    	'tag_field',
    	'user_id' //temp
    ];

    /**
     * A Entry is owen by a user
     *
     * 
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}


