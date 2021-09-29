<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    public function carBrand()
    {
        return $this->belongsTo(CarBrand::class, 'car_brand_id', 'id');
    }

    public function carModel()
    {
        return $this->belongsTo(CarModel::class, 'car_model_id', 'id');
    }
}
