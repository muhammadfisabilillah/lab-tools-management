<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('tools.index');
    })->name('dashboard');

    Route::resource('tools', ToolController::class);
});

require __DIR__.'/auth.php';