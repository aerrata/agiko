<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'meta' => 'object'
    ];

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
