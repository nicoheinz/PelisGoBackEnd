<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChapterUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     * 
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * 
     */


    public function rules()
    {
        return [
            'tittle' => 'required|string|max:100',
            'url_img' => 'required|string|max:300', 
            'url_chapter' => 'required|string|max:300',
            'time' => 'required|string|max:100'
        ];
    }

    public function messages()
    {
        return [
            'tittle' => 'tittle is required!',
            'url_img' => 'url_img is required!',
            'url_chapter' => 'url_chapter is required!',
            'time' => 'time is required!'
        ];
    }
}
