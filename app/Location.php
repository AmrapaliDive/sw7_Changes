<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


	class Location extends Model
{


	 public $fillable = [
			 'city',
			 'lat',
			 'lng',
			'created_at',
			'updated_at',
	 ];

	 //public $timestamps = false;

}