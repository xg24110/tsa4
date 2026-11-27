<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $table = 'task';
    protected $fillable = ['tn', 'is_archived'];

    protected $casts = [
        'is_archived' => 'boolean'
    ];

}

