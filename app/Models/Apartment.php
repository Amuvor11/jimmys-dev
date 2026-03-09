<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Apartment extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable = [
        'price',
        'area',
        'booking_url',
        'booking_url_en'
    ];

    protected $with = [ 'rooms'];

    public $translatedAttributes = [
        'name',
        'booking_url'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
