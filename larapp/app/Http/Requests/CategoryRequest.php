<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
      if ($this->method() == 'PUT') {
            return [
            'name'           => 'required',          
            'description'    => 'escription',          
        ];
    } else {
        return [
            'name'           => 'required',
            'image'          => 'required|image|max:2000',
            'description'    => 'required',               
        ];
      }
    }
    public function messages() {
        return [
            'name.required' => 'The ":attribute" field is required.',
        ];
}
    public function attributes()
    {
        return [
            'name' => 'Name',
        ];
    }
}
