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
        return TRUE;
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
            'projected_total_modules' => 'required|numeric',
            'projected_total_pages' => 'required|numeric',

        ];

        if($project = $this->route('proyectos')){
            $rules['name'] = 'unique:projects,name,'.$project->id.'\required\min:3';
        }

        return $rules;
    }
}
