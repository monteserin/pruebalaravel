<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalActions extends Model
{
    use HasFactory;

    public function brands()
    {
        return $this->belongsToMany(Regions::class, 'brands_digitalActions', 'brands_id', 'digitalActions_id');
    }
}
