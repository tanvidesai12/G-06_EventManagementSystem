<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
	public function venues()
	{
		return $this->belongsTo('App\Models\venue');
	}
	public function dishes()
    {
        return $this->belongsToMany(Dish::class,'selected_dishes','booking_id','dish_name');
    }
     public function reviews()
    {
        return $this->hasOne('App\Models\Review');
    }
 	public function events()
    {
        return $this->hasOne('App\Models\EventDetail');
    }
}
