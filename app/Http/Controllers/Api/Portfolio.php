<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class Portfolio extends Controller
{
    public function index()
    {
        return json_encode(['message' => 'Hello World']);
    }
}
