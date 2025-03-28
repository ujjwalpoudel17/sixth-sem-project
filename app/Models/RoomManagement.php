<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomManagement extends Model
{
    protected $guarded = [ 'id',];

    public function HotelManagement(){
        return $this->belongsTo(HotelManagement::class,'hotelmanagement_id');
    }
}
