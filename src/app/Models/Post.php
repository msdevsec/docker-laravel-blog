<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    // Fields that can be mass assigned
    protected $fillable = [
        'title',
        'content',
        'youtube_id',
        'is_premium',
        'premium_content'
    ];

    // Automatically create slug when title is set
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }

    // Get YouTube embed URL
    public function getYouTubeEmbedAttribute()
    {
        if ($this->youtube_id) {
            return "https://www.youtube.com/embed/{$this->youtube_id}";
        }
        return null;
    }
}
