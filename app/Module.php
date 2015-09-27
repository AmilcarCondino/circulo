<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //
    protected $fillable = [

        'module_title',
        'is_orphan',
        'projected_total_pages',
        'father_module'
    ];
}
