<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title', 'description', 'priority', 'flag', 'user_id'
    ];

    public function user() 
    {
        return $this->hasOne('App\User');

    }
}
