<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    //

    protected $fillable=[
        'id', 
        'name', 
        'email',
        'password',
        'image',
    ];
}
