<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PossiblePhoto extends Model
{
    //
    protected $fillable = [

        'name',
        'selected',
        'downloaded',
        'rejected',
        'url',
        'parent_image_id'
    ];
}
