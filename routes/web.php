<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgrammingLanguageController;

Route::get('/', function () {
    return redirect()->route('languages.index');
});

Route::get('/languages', [ProgrammingLanguageController::class, 'index'])->name('languages.index');
Route::get('/languages/{language}', [ProgrammingLanguageController::class, 'show'])->name('languages.show');
