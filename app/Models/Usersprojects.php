<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usersprojects extends Model
{
    //

    protected $table = "usesprojects";

     public $timestamps = false;

    protected $fillable=[
        'project_name',
        'project_img',
        'project_git_url',
        'user_id'
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
