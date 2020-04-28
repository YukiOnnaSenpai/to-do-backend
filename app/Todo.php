<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'title', 'description', 'priority', 'flag'
    ];

    public function user() 
    {
        return $this->hasOne('App\User');

    }
}
