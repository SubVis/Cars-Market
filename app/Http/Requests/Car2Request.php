<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Car2Request extends FormRequest
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
                 'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                 'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                 'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                 'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                 'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                 'image6' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], 
       
    }

      public function messages(){
        return [
          'image1.required'=> 'please put iamge', 
          'image1.required'=> 'please put iamge'
        ];
    }


     public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors()->first()));
    }
}
