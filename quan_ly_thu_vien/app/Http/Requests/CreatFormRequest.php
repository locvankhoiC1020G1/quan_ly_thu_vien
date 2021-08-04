<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatFormRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'author'=> 'required',
            'price'=>'required',
            'category'=>'required',
            'description'=>'required|max:255',
        ];
    }

    public function messages()
    {
        return[
          'name.required'=> 'tên không được để trống',
            'author.required' =>'tác giả không được để trống',
            'price.required' => 'giá không được để trống',
            'category.required'=> 'thể loại k được để trống',
        ];
    }
}
