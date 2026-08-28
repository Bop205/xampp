<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function index(Request $request)
    {
        $params = $request -> input();
        return response()-> json([
            'success' => true,
            'message' => 'API is running',
            'params' => $params
        ]);
    }
}
