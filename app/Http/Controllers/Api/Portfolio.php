<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class Portfolio extends Controller
{
    public function index()
    {
        $client = new Client();
        $token = env('GITHUB_TOKEN');
        $response = $client->request('GET', 'https://api.github.com/users/wesleyvianam/repos', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/vnd.github.v3+json',
            ],
        ]);

        return $response->getBody();
    }
}
