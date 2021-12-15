<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner',
        'gameId'];

    public function membership()
    {
        return $this->hasMany('App\Models\Membership');
    }

    public function messages()
    {
        return $this->hasMany('App\Models\Message');
    }

    public function games()
    {
        return $this->belongsTo('App\Models\Game', 'gameId', 'id');
    }
}
