<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    //
    public function index()
    {
        $sections = Section::all();
        // $sections = Section::paginate(2);
        // dd($sections);
        return view('section.index', compact('sections'));
    }
}
