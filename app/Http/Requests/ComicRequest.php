<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|max:100|min:2',
            'image' => 'required|max:255|min:10',
            'series' => 'required|max:100|min:2',
            'type' => 'required|max:20|min:2',
            'price' => 'required|decimal:2',
            'sale_date' => 'date_format',
        ];
    }
}
