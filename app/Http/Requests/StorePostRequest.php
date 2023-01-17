<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'slug' => ['required'],
            'type' => ['required', Rule::in(['article', 'event'])],
            'title' => ['required'],
            'content' => ['required'],
            // 'category' => ['required_if:type,article'],
            'image_url' => ['required'],
            'published' => ['boolean'],
            'description' => ['required'],
        ];
    }
}
