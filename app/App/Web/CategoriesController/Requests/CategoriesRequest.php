<?php

namespace App\Web\CategoriesController\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
        ];
    }
}
