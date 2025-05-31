<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_name',
        'address',
        'phone_number',
        'email',
        'description',
        'logo_path',
        'operating_hours',
        'google_maps_link',
    ];
}
