<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}
