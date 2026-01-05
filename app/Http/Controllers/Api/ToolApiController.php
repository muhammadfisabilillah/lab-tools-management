<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tool;
use Illuminate\Http\Request;

class ToolApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Tool::all()
        ]);
    }
}
