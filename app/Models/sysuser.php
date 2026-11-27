<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class sysuser extends Authenticatable
{
    protected $table = 'user';
    protected $fillable = ['username', 'password'];
}
