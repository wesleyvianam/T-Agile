<?php

namespace App\Http\Controllers\Project\Resquests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUpdateProject extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
        ];
    }
}
