<?php

namespace App\Http\Controllers\Setting\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(Request $request)
    {
        $projectId = $request->query('id');

        return view('setting.index')->with('projectId', $projectId);
    }
}
