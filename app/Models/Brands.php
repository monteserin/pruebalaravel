<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    public function digitalActions()
    {
        return $this->belongsToMany(Regions::class, 'brands_digitalActions', 'digitalAction_id', 'brand_id');
    }
}
