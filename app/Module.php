<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //
    protected $fillable = [

        'name',
        'project_id',
        'module_id',
        'projected_total_pages'
    ];


    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function module()
    {
        return $this->belongsTo('App\Module');
    }

    public function pages()
    {
        return $this->hasMany('App\Page');
    }

}
