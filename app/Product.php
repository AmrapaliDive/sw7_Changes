<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name','type','subtype','stock','price','description','path','path2','path3','dealer_id'];

    public function Dealers()
    {
        return $this->belongsTo('App\Dealer');
    }
}


