<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
            'id_responsable'  => 'required',
            'nombre'  => 'required',
            'fecha_inicio'  => 'required',
            'fecha_fin'  => 'required',
            'descripcion'  => 'required',
            'id_estado'  => 'required',

        ];
    }
}
