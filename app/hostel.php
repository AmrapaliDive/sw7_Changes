<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hostel extends Model
{
   // use HasFactory;
    protected $table='hostel';
    public $fillable = [
        'id',
        'name',
        'email',
        'dob',
        'contact',
       'father_name',
       'mother_name',
       'permanent_address',
       'aadhar_no',
       'passport_image',
];

public $timestamps = false;
}
