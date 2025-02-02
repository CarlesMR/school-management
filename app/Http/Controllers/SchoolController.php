<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\School\PatchSchoolRequest;
use App\Http\Requests\School\StoreSchoolRequest;

class SchoolController extends Controller
{
    public function index()
    {
        return view('schools.index')
            ->with('schools', School::paginate(5));
    }

    public function create()
    {
        return view('schools.create');
    }

    public function store(StoreSchoolRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $fileExtension = $request->file('logo')->getClientOriginalExtension();
            $randomFileName = Str::random(20) . '.' . $fileExtension;

            $request->file('logo')->storeAs('schools', $randomFileName, 'public');
            $data['logo'] = $randomFileName;
        }

        School::create($data);

        return redirect(route('schools.index'))
            ->with('success', 'Escuela creada correctamente!');
    }

    public function show(School $school)
    {
        return view('schools.show')->with('school', $school);
    }


    public function edit(School $school)
    {
        return view('schools.edit')->with('school', $school);
    }

    public function update(PatchSchoolRequest $request, School $school)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $fileExtension = $request->file('logo')->getClientOriginalExtension();
            $randomFileName = Str::random(20) . '.' . $fileExtension;

            $request->file('logo')->storeAs('schools', $randomFileName, 'public');
            $data['logo'] = $randomFileName;
        }

        $school->update($data);

        return redirect(route('schools.index'))
            ->with('success', 'Escuela actualizada correctamente!');
    }

    public function destroy(School $school)
    {
        $school->delete();

        return redirect(route('schools.index'))
            ->with('success', 'Escuela eliminada correctamente!');
    }
}
