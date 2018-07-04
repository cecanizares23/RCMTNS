<?php

namespace fincavicola\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLinea_genRequest extends FormRequest
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
            'nombre' => 'required|max: 40',
            'observacion' => 'required|max: 40',
            'id_tipo_ave' => 'required' 
        ];
    }
}
