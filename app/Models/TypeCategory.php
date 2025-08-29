<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use App\Models\Category;

class TypeCategory extends Model
{
    //


    protected $fillable = [
        'name',
        /* 'type', */
        'description',
    ];

    public function categories()
    {
    return $this->hasMany(Category::class, 'typecategory_id');
    }
}
