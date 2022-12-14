<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Survey extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = ['user_id','image', 'title', 'slug', 'status', 'description', 'expire_date', 'question'];

    public function getSlugOptions() : SlugOptions 
    {
        return SlugOptions::create()
                    ->generateSlugsFrom('title')
                    ->saveSlugsTo('slug');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions() 
    {
        return $this->hasMany(SurveyQuestion::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\RElations\HasMany
     */
    public function answers() 
    {
        return $this->hasMany(SurveyAnswer::class);
    }
}
