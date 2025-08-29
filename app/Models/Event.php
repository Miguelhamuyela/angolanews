<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use App\Models\Author;
use App\Models\Cities;

class Event extends Model
{
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
     public function author()
    {
        return $this->belongsTo(author::class);
    }
     public function cities()
    {
        return $this->belongsTo(Cities::class);
    }

    protected $guarded = [];
    protected $fillable = [
        'title',
        'subtitle',
        'author',
        'image',
        'description',
        'location',
        'event_date',
        'status',
        'category_id',
        'author_id'
    ];
}
