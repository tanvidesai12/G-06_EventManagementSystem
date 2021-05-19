<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_detail extends Model
{
    use HasFactory;
	public function getBooking()
	{
	//	return $this->hasOne('App\Models\Booking');
	}
}
