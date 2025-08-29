<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\State;

class Cities extends Model
{
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }
    use SoftDeletes;
    protected $fillable = ['name', 'state_id'];
}
