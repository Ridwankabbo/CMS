<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemplatesSections extends Model
{
    //
    protected $table = 'templates_sections';

    protected $fillable = [
        'template_id',
        'template_name',
        'Intro',
        'About',
        'Skills',
        'Projects',
        'Education_from',
        'Posts',
    ];
}
