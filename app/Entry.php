<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Entry extends Model
{
    protected $fillable = [
    	'entry_title',
    	'entry_color_1',
        'entry_color_2',
        'entry_color_3',
    	'entry_body',
    	'tag_field',
    	'user_id' 
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

    /**
     * The storage format of the enties date columns.
     *
     * @var string
     */
        
    
}


