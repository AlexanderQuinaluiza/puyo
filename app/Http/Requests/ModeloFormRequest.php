<?php

namespace sisAdminPuyo\Http\Requests;

use sisAdminPuyo\Http\Requests\Request;

class ModeloFormRequest extends Request
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
            'm_nombre'=>'placeholder:Administrador|required|max:50',
            'm_descripcion'=>'max:100'
            //
        ];
    }
}
