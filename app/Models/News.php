<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class News extends Model
{
    use softDeletes;

    protected $fillable = [
        'image',
        'title',
        'slug',
        'subtitle',
        'detach',
        'status',
        'date',
        'category_id',
        'description',
    ];

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getFormattedDateAttribute()
    {
        return $this->date->format('d/m/Y');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            $news->slug = Str::slug($news->title);
        });

        static::updating(function ($news) {
            $news->slug = Str::slug($news->title);
        });
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'news_tags');
    }
}
