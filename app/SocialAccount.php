<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;

class SocialAccount extends Model
{
    protected $fillable = ['name', 'email', 'avatar', 'provider', 'provider_id', 'remember_token'];

    public function user()
    {
        return $this->belongsTo(CreateSocialAccountsTable::class);
    }
}

