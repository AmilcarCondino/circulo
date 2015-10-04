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
        'image_id'
    ];

    public function image()
    {
        return $this->belongsTo('App\Image');
    }

}
