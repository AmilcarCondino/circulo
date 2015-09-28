<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProjectRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $rules = [

            'name' => 'unique:projects,name|required|min:3',
            'projected_total_modules' => 'required|digits',
            'projected_total_pages' => 'required|digits'

        ];

            if( $project = $this->route('proyectos')){
                $rules['name'] = 'unique:projects,name|required|min:3' .$project->id. 'project_id';
            }


        return $rules;
    }
}
