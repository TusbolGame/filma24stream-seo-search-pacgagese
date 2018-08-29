<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Serie extends Model implements HasMedia
{
    use HasSlug, HasMediaTrait;
    protected $fillable = [
        'title',
        'created_year',
        'poster_path'
    ];
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    public function seasons()
    {
        return $this->hasMany(Season::class)->latest();
    }

    public function registerMediaCollections()
    {
        $this
            ->addMediaCollection('posterSerie')
            ->singleFile();
    }


}
