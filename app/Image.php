<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = [

        'image_sort',
        'assigned_to',
        'stage',
        'model_file',
        'request',
        'parent_page_id'
    ];
}
