<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [

        'name',
        'authors',
        'projected_total_modules',
        'projected_total_pages',
        'format',
        'alternative_format',
        'complementary_materials',
        'notes',
        'isbn_number'
    ];

    public function modules()
    {
        return $this->hasMany('App\Module');
    }
}
