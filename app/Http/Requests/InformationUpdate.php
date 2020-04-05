<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationUpdate extends FormRequest
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
            //       
            'title_top'=>'required',
            'description'=>'required',
            'keywords'=>'required',
            'wordtime'=>'required',
            'email'=>'required',
            'tel'=>'required',
            'map' =>'required',   
            'phome'=>'required',
            'fox'=>'required',
        ];
    }
}
