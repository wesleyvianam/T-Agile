<?php

namespace App\Http\Controllers\Project\Resquests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProjects extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'userId' => ['required', 'integer'],
        ];
    }
}
