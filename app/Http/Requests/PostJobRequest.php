<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'city_id' => 'required',
            'town_id' => 'required',
            'description' => 'max:500',
        ];
    }
}
