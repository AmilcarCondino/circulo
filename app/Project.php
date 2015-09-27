<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [

        'project_title',
        'authors',
        'projected_primary_total_modules',
        'projected_total_pages',
        'format',
        'alternative_format',
        'complementary_materials',
        'notes',
        'isbn_number'
    ];
}