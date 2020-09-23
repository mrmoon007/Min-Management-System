<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class allPost extends Model
{

    protected $fillable = [
        'name', 'email', 'phone','message',
    ];
}
