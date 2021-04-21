<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enquiry extends Model
{
    //
    //use HasFactory;
    protected $table='enquiry';
    public $fillable = [
        'username',
        'email',
        'contact',
       'course',
       'enquiry_type'

];

public $timestamps = false;

}
