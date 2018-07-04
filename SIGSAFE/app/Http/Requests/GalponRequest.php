<?php

namespace fincavicola\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalponRequest extends FormRequest
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
            'tope_max' => 'required',
            'obs_inicial' => 'required|max: 40',
            'estado' => 'required|max: 40',
            'altura' => 'required|max: 15',
            'anchura' => 'required|max: 15',
            'tipo_galpon' => 'required|max: 40',
            'id_lote' => 'required|max: 10',
        ];
    }
}
