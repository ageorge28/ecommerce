<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ShippingCity;
use App\Models\ShippingDistrict;

class ShippingState extends Model
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
}
