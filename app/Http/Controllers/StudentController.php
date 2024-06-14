<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(Student $student)
    {
        return view('student.show', compact('student'));
    }
    public function form(Student $student = null)
    {
        // dd($student);
        if (!isset($student)) {
            $student = new Student();
            return view('student.create', compact('student'));
        } else {
            return view('student.edit', compact('student'));
        }
    }
}
