<?php

namespace App\Models;

use App\Models\News;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Tag extends Model
{
    //
    use SoftDeletes;
    
    protected $fillable = [
        "name",
        "description",
    ];

    public function news()
    {
        return $this->belongsToMany(News::class, 'news_tags');
    }
}
