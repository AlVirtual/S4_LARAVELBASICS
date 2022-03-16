<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
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
            'name' => 'required',
            'stadium' => 'unique:teams,stadium_id',
        ];
    }



    public function messages()
    {

        return [
            'name.required' => 'El nom és obligatori',
            'stadium.unique' => 'El camp està asignat a un altre equip.'

        ];
    }
}
