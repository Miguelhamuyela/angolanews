<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    //
    use SoftDeletes;

    public function events()
    {
        return $this->hasMany(Event::class);
    }
    protected $fillable = [
        'name',
        'biography',
        'foto'
    ];
}
