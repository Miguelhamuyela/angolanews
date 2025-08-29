<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Country;
use App\Models\Cities;

class State extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function cities()
    {
        return $this->hasMany(Cities::class);
    }
    use SoftDeletes;
    protected $fillable = ['name', 'country_id'];
}
