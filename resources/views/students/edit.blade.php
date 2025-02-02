@extends('layouts.app')

@section('title', 'Editar')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Editar Estudiante</h1>
        <a href="{{ route('students.index') }}" class="btn btn-primary my-auto">
            Volver
        </a>
    </div>
@endsection

@section('content')
    <div class="card">
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', $student->name) }}" placeholder="Student Name Example">
                </div>

                <div class="mb-3">
                    <label for="surnames" class="form-label">Surnames</label>
                    <input type="text" class="form-control" id="surnames" name="surnames"
                        value="{{ old('surnames', $student->surnames) }}" placeholder="Student surnames Example">
                </div>

                <div class="mb-3">
                    <label for="school" class="form-label">School</label>
                    <select class="form-select" name="school_id" aria-label="Default select example">
                        @foreach ($schools as $schoolOption)
                            <option value="{{ $schoolOption->id }}" @selected(old('school_id', $student->school_id) == $schoolOption->id)>
                                {{ $schoolOption->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="date_of_birth" class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                        value="{{ old('date_of_birth', $student->date_of_birth) }}"
                        placeholder="Student Date Birth Example">
                </div>

                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city"
                        value="{{ old('city', $student->city) }}" placeholder="Student City Example">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
@endsection
