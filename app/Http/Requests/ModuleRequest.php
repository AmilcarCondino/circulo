<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Module;

class ModuleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required',
            'projected_total_pages' => 'required|numeric',
            'project_id' => 'required_if:parent_module_id,0',
            'parent_module_id' => 'required_without:project_id'
        ];
    }

}
