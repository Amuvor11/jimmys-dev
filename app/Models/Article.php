<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'slug',
            'title_en',
            'title_de',
            'body_en',
            'body_de',
            'cover_video',
            'cover_image',
        ];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }}
