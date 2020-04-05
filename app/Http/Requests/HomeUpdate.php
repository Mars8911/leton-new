<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeUpdate extends FormRequest
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
            'index_title_1' =>'required|max:30',   
            'index_description_1'=>'required|max:30',
            'index_link_1' =>'required', 
            'index_title_2' =>'required|max:30',   
            'index_description_2'=>'required|max:30',
            'index_link_2' =>'required',
            'index_title_3' =>'required|max:30',   
            'index_description_3'=>'required|max:30',
            'index_link_3' =>'required',
            'index_title_4' =>'required|max:30',   
            'index_description_4'=>'required|max:30',
            'index_link_4' =>'required',
            'index_title_5' =>'required|max:30',   
            'index_description_5'=>'required|max:30',
            'index_link_5' =>'required',
           
        ];
    }
}
