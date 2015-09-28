<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //
    protected $fillable = [

        'name',
        'project_id',
        'parent_module_id',
        'projected_total_pages'
    ];
}
