<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryHome extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'location',
        'phone-number',
    ];
}
