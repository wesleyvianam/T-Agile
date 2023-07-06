<?php

namespace App\Web\Setting\Controllers;

use App\Core\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        return view('Setting.index');
    }
}
