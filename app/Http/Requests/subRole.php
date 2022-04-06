<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class subRole extends FormRequest
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
            'role' => 'required',
            'title' => 'required',
            
            // 'password' => ['required', 
            //    'min:6', 
            //    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%@]).*$/', 
            //    'confirmed']
            // 'TotalMarks' => 'required',
            // 'ObtainedMarks' => 'required|lte:TotalMarks',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'start_date.required' => '',
    //         'start_date.before' => '',
    //     ];
    // }

}
