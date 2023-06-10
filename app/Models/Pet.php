<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vaccine;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'age',
        'description',
        'status',
        'phone-number',
    ];


    public function photos()
    {
        return $this->belongsToMany(Photo::class, 'pets_photo', 'photo_id', 'pet_id');
    }

    public function diseases()
    {
        return $this->belongsToMany(Disease::class, 'pets_diseases', 'disease_id', 'pet_id');
    }

    public function attitudes()
    {
        return $this->belongsToMany(Attitude::class, 'pets_attitudes', 'attitude_id', 'pet_id');
    }

    public function vaccines()
    {
        // return $this->belongsToMany(Product::class, 'quotes_products', 'quote_id', 'product_id')->withPivot('quantity');

        return $this->belongsToMany(Vaccine::class, 'pets_vaccines', 'vaccine_id', 'pet_id');
    }
}
