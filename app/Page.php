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
        'module_id',
        'notes'
    ];

    public function module()
    {
        return $this->belongsTo('App\Module');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

}
