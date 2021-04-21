<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
