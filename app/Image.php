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
        'page_id'
    ];


    public function page()
    {
        return $this->belongsTo('App\Page');
    }

    public function possible_photos()
    {
        return $this->hasMany('App\PossiblePhoto');
    }
}
