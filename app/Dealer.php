<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Dealer extends Authenticatable
{
        //use Notifiable;
    
        protected $table = 'dealers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','email','contact1','contact2','dob','address','city','pincode','category','user_id','dealer_image','password' ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function getAuthPassword()
    // {
    //   return $this->chef_password;
    // }

    public $timestamps = false;

    public function documents()
    {
        return $this->hasMany('App\Document');
    }
       
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
  
}
