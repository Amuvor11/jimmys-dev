<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Location extends Model
{
    use HasFactory;
    use Translatable;


    protected $fillable = [
        'slug',
        'info_slug',
        'fac_pdf',
        'booking_subdomain',
        'status',
        'logo',
        'hero',
        'address',
        'zip',
        'ort',
        'title',
    ];

    public $translatedAttributes = [
        'intro',
        'categories',
        'features',
        'facilities',
    ];

    protected $with = [ 'apartments'];


    public function apartments()
    {
        return $this->hasMany(Apartment::class)->orderBy('sorting', 'asc');
    }
}
