<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TokenManagement extends Model
{
    protected $table = 'oauth_access_tokens';

    public function users() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
