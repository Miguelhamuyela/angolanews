<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\News;

class Comment extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'text_comment',
        'author_comment',
        'date',
        'news_id'
    ];

    public function news()
    {
        return $this->belongsTo(News::class);
    }

    public function getFormattedDateAttribute()
    {
        return $this->date->format('d/m/Y');
    }

    /*  public function getAuthorInitialsAttribute()
    {
        $names = explode(' ', $this->author_comment);
        $initials = '';
        foreach ($names as $name) {
            $initials .= strtoupper($name[0]);
        }
        return $initials;
    } */
}
