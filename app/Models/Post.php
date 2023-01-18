<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $guarded = [];

    protected $casts = [
        'meta' => 'object'
    ];

    protected $with = ['media'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeIsArticle($query)
    {
        return $query->where('meta->type', 'article');
    }

    public function scopeIsEvent($query)
    {
        return $query->where('meta->type', 'event');
    }
    
    public function scopeIsPublished($query)
    {
        return $query->where('meta->published', true);
    }
}
