<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venue extends Model
{
    use HasFactory;
	public $timestamps=false;
	function bookings()
	{
		return $this->hasMany(Booking::class);
	}
	
}
