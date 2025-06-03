<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebSiteSections extends Model
{
    //

    protected $table = "web_site_sections";

    protected $fillable = [
        'user_id',
        'introduction_section',
        'about_section',
        'skills_section',
        'education_section',
        'project_section'
    ];
}
