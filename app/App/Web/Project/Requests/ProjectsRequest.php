<?php

namespace App\Web\Project\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'type' => ['required', 'string'],
        ];
    }
}
