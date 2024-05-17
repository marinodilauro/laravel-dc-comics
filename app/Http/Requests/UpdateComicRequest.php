<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicRequest extends FormRequest
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
            'title' => ['required', 'min:5', 'max:100', Rule::unique('comics')->ignore($this->comic->id)],
            'description' => 'nullable|max:1000',
            'thumb' => 'required|min:8|max:255',
            'price' => 'nullable|max:10',
            'series' => 'nullable|max:100',
            'type' => 'nullable|max:15',
            'sale_date' => 'nullable|max:10'
        ];
    }
}
