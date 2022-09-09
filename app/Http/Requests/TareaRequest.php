<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TareaRequest extends FormRequest
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
            'Nombre' => 'required|max:255',
            'Descripcion' => 'nullable|max:255',
            'Finalizada' => 'nullable|numeric|min:0|max:1',
            'Urgencia' => 'required|numeric|min:0|max:2',
            'Fecha_limite' => 'required|date_format:Y-m-d\TH:i'
        ];
    }
}
