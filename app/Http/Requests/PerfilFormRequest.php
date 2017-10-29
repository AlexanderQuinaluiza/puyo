<?php

namespace sisAdminPuyo\Http\Requests;

use sisAdminPuyo\Http\Requests\Request;

class PerfilFormRequest extends Request
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
            //reglas nombre de perfil 
            'nombre'=>'required|max(50)';
        ];
    }
}
