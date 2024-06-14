<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    //
    public function index()
    {
        // $sections = Section::all();
        $sections = Section::with('student')->paginate(2);
        // $sections = Section::cursorPaginate(2);
        // dd($sections);

        return view('section.index', compact('sections'));
    }
    public function show(Section $section)
    {
        // dd($section);
        return view('section.show', compact('section'));
    }
}
