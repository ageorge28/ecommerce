<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function city()
    {
        return $this->belongsTo(ShippingCity::class, 'city_id', 'id');
    }
    
    public function district()
    {
        return $this->belongsTo(ShippingDistrict::class, 'district_id', 'id');
    }

    public function state()
    {
        return $this->belongsTo(ShippingState::class, 'state_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


}
