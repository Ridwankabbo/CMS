<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;;

class Usersinfo extends Model
{
 
    use HasFactory, Notifiable;
    //

    protected $table = 'users_info';

    protected $fillable = [
        'title',
        'intro_text',
        'image',
        'about',
        'phone',
        'user_id',
        'template_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
