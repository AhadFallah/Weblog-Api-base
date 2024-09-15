<?php

namespace App\Http\Requests\Articles;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            "name" => "nullable|string|max:255",
            "description" => "nullable|string",
            "text" => "nullable|string",
            "cover" => "nullable|image",
            "category_id" => "nullable|exists:categories,id",
            "tags" => "nullable|array",
            "tags.*" => "nullable"
        ];
    }
}
