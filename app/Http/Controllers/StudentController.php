<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\School\PatchStudentRequest;
use App\Http\Requests\School\StoreStudentRequest;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index')
            ->with('students', Student::paginate(5));
    }

    public function create()
    {
        return view('students.create')
            ->with('schools', School::all());
    }

    public function store(StoreStudentRequest $request)
    {
        $data = $request->validated();

        Student::create($data);

        return redirect(route('students.index'))
            ->with('success', 'Estudiante creado correctamente!');
    }

    public function show(Student $student)
    {
        return view('students.show')->with('student', $student);
    }

    public function edit(Student $student)
    {
        return view('students.edit')
            ->with('student', $student)
            ->with('schools', School::all());;
    }

    public function update(PatchStudentRequest $request, Student $student)
    {
        $data = $request->validated();

        $student->update($data);

        return redirect(route('students.index'))
            ->with('success', 'Estudiante actualizado correctamente!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect(route('students.index'))
            ->with('success', 'Estudiante <eliminado></eliminado> correctamente!');
    }
}
