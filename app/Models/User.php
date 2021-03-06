<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{

    protected $fillable = ['userName', 'email', 'password', 'steamUserName'];

    protected $hidden = ['password'];

    use HasApiTokens, HasFactory, Notifiable;

    public function friendship()
    {

        return $this->hasMany('App\Models\Friendship');
    }

    public function messages()
    {

        return $this->hasMany('App\Models\Message');
    }

    public function belongs()
    {

        return $this->hasMany('App\Models\Membership');
    }
}
