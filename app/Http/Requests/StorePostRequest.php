<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
       // return false;
       return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required',
            'text'=>'required',
            'category_id' => 'required',
             
            
            
               
        ];

           

    }

    public function messages()
    {
        return [
           'title.required'=>'Title is required',
            'text.required'=>'Text is required',
            'category_id.required'=>'Category id is required',
        ];
            
    }
}
