<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    public $fillable = [
        'question',
        'description'
    ];

    public function options()
    {
        return $this->hasMany('App\Option');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
