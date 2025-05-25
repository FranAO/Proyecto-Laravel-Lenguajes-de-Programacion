<?php

namespace App\Http\Controllers;

use App\Models\ProgrammingLanguage;
use Illuminate\Http\Request;

class ProgrammingLanguageController extends Controller
{
    public function index()
    {
        $languages = ProgrammingLanguage::all();
        return view('languages.index', compact('languages'));
    }

    public function show(ProgrammingLanguage $language)
    {
        return view('languages.show', compact('language'));
    }
}
