<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

use Illuminate\Http\Exceptions\HttpResponseException;
class CarRequest extends FormRequest
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
               'title'          =>   'required', 
               'brand'          =>   'required', 
               'model'          =>    'required',
                'cc'            =>    'required',
                'city'          =>    'required',
                'kilometers'    =>     'required',
                'driver'        =>     'required',
                'fuel'          =>      'required', 
               'color'          =>       'required', 
               'price'          =>       'required',
               'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               'image6' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
              
        ];
    }
       public function messages(){
        return [
           "title.required"  => "حقل العنوان مطلوب",
           "brand.required"  => "حقل الماركة مطلوب",
           'model.required' => "حقل الموديل مطلوب",
           'cc.required' => "حقل سعة المحرك مطلوب",
           'city.required' => "حقل المدينة مطلوب",
           'kilometers.required' => "حقل المسافة مطلوب",
           'driver.required' => "حقل ناقل الحركة مطلوب",
           'fuel.required' => "حقل الوقود مطلوب",
           'color.required' =>"حقل اللوان مطلوب",
           'price.required' =>"حقل السعر مطلوب",
           'image1.required'=> 'please put iamge', 
          'image2.required'=> 'please put iamge'
        ];
    }


    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 500)); 
    }

}
