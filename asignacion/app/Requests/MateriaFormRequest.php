<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoFormRequest extends FormRequest
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
            'nombre'=>'required|max:45',
            'descripcion'=>'required|max:45',
            'idTipoMateria'=>'required',
            'idAlumno'=>'required'
        ];
    }
}
