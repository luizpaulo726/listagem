<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAcess extends Model
{
    //
    protected $table = 'users_acess';
    protected $fillable = ['last_login', 'users_id'];
}
