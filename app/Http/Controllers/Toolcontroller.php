<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index()
    {
        $tools = Tool::all();
        return view('tools.index', compact('tools'));
    }

    public function create()
    {
        return view('tools.create');
    }

    public function store(Request $request)
    {
        // VALIDASI (WAJIB)
        $request->validate([
            'name' => 'required',
            'category' => 'required',
        ]);

        // SIMPAN DATA
        Tool::create([
            'name' => $request->name,
            'category' => $request->category,
        ]);

        return redirect()->route('tools.index');
    }
}