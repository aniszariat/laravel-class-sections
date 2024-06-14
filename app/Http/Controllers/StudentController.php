<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentFormRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

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
    public function create(StudentFormRequest $request)
    {
        $student = new Student();
        return $this->studentFormData($student, $request);
    }
    public function update(Student $student, StudentFormRequest $request)
    {
        return $this->studentFormData($student, $request);
    }

    private function studentFormData(Student $student, StudentFormRequest $request)
    {
        $data = $request->validated();
        if ($student->id) {
            $student->update($data);
        } else {
            $student = Student::create($data);
        }
        return redirect()->route('student.show', $student)->with('status', ($student->id ? ("les données de l'etudiant" . $student->first_name . " " . $student->last_name . " ont été modifier avec succès!") : ("l'etudiant" . $student->first_name . " " . $student->last_name . " été crée avec succès!")));
    }

    public function delete($id)
    {
        Student::findorfail($id)->delete();
        return redirect()->route('section.index')->with('status', 'deleted student!');
    }
}
