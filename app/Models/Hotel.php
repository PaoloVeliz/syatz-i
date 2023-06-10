<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'price',
        'schedules',
        'max-pet-height',
        'phone-number'
    ];


    public function photos()
    {
        return $this->belongsToMany(Photo::class, 'hotel_photos', 'photo_id', 'hotel_id');
    }

    public function criterias()
    {
        return $this->belongsToMany(Photo::class, 'hotel_photos', 'photo_id', 'hotel_id');
    }
}
