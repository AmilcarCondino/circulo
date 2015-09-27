<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable = [

        'page_number',
        'page_stage',
        'layout_stage',
        'notes'
    ];
}
