<?php

namespace App\Web\Task\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'status' => ['required', 'string'],
        ];
    }
}
