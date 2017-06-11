<?php

namespace sgve\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
            'nom_empresa' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'contacto' => 'required',
        ];
    }
}
