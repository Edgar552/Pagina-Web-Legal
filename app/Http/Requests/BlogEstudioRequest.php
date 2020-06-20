<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogEstudioRequest extends FormRequest
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
                'titulo'=>'required',
                'url_blog'=>'required|unique:blog_estudio,url_blog',
                'descripcion'=>'required',
                'contenido'=>'required',
                
                ];
    }


    public function messages()
    {

        return ['url_blog.unique'=>'La URL ya existe, intente con una diferente'];

    }
}
