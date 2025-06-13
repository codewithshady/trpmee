<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageDestinationDetails extends Model
{
    protected $fillable = [
        'pakage_destination_id',
        'title',
        'description',
        'location',
        'country',
        'visa_required',
        'price_per_person',
        'language',
        'area',
        'map_embed',
        'gallery_images',
        'main_image',
        'duration',
        'price',
        'image',
        'is_featured',
        'discount',
        'rating'
    ];
    protected $casts = [
        'gallery_images' => 'array',
        'visa_required' => 'boolean',
        'is_featured' => 'boolean',
    ];
    public function package()
    {
        return $this->belongsTo(PakageDestination::class, 'pakage_destination_id');
    }


    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
