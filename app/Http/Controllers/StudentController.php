<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        //$students = Student::all();
        $students = Student::paginate(5);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:students',
            'registration_id' => 'required|max:255|unique:students',
            'description' => 'required',
        ]);

        $student = new Student;
        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->description = $request->description;
        $student->save();

        return redirect()->route('index')->with(['success'=>'Registration Success.']);
    }

    public function show(Student $student, $id)
    {
        $student = Student::find($id);
        return view('students.show')->with('student', $student);
    }

    public function edit(Student $student, $id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('student', $student);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->description = $request->description;
        $student->save();

        return redirect()->route('index');
    }

    public function delete(Request $request,$id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('index');
    }
}
