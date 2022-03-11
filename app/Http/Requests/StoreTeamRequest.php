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
            'stadium' => 'unique:teams,stadium_id',
        ];
    }



    public function messages(){
       
        return[
            'stadium.unique' => 'El campo pertenece a otro equipo.'
                                
        ];
        
    }
}
