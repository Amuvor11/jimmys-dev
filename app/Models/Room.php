<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Room extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable = [
        'icon',
    ];

    public $translatedAttributes = [
        'name',
        'sleeping',
    ];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}
