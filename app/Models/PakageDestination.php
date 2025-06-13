<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PakageDestination extends Model
{
    protected $fillable = [
        'destination_id',
        'title',
        'description',
        'location',
        'duration',
        'price',
        'image',
        'is_featured',
        'discount',
        'rating'
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
