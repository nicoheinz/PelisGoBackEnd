<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tittle' => 'required|string|max:100',
            'gender' => 'required|string|max:100',
            'actor' => 'required|string|max:100',
            'director' => 'required|string|max:100',
            'qualification' => 'required|string|max:10',
            'url_img' => 'required|string|max:300',
            'url_trailer' => 'required|string|max:300',
            'url_video' => 'required|string|max:100',
            'quality' => 'required|string|max:5',
            'duration' => 'required|string|max:50',
            'year' => 'required|string|max:50', 
            'comments' => 'required|string|max:100'
        ];
    }

    public function messages()
    {
        return [
            'tittle' => 'tittle is required!',
            'gender' => 'gender is required!',
            'actor' => 'actor is required!',
            'director' => 'director is required!',
            'qualification' => 'qualification is required!',
            'url_img' => 'url img is required!',
            'url_trailer' => 'url trailer is required!',
            'url_video' => 'url video is required!',
            'quality' => 'quality is required!',
            'duration' => 'duration is required!',
            'year' => 'year is required!',
            'comments' => 'comments is required!'
        ];
    }
}
