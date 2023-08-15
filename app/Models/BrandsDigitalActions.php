<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandsDigitalActions extends Model
{
    use HasFactory;

    public function digitalAction()
    {
        return $this->belongsToMany(Regions::class, 'brand_digitalAction', 'digitalAction_id', 'brand_id');
    }

    public function brand()
    {
        return $this->belongsToMany(Regions::class, 'brands_digitalActions', 'brand_id', 'digitalAction_id');
    }
}
