<?php

namespace App\Http\Controllers\Profile\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProfile extends FormRequest
{
    public function rules(): array
    {
        return ['title' => ['required', 'string']];
    }
}
