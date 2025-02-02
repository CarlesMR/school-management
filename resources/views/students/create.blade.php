@extends('layouts.app')

@section('title', 'Editar')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Crear Estudiante</h1>
        <a href="{{ route('students.index') }}" class="btn btn-primary my-auto">
            Volver
        </a>
    </div>
@endsection

@section('content')
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Student Name Example">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="surnames" class="form-label">Surnames</label>
            <input type="text" class="form-control" id="surnames" name="surnames"
                placeholder="Student surnames Example">
            @error('surnames')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">School</label>
            <select class="form-select" name="school_id" aria-label="Default select example">
                @foreach ($schools as $school)
                    <option value="{{ $school->id }}" @selected(old('school_id', $school->id) == $school->id)>
                        {{ $school->name }}
                    </option>
                @endforeach
            </select>
            @error('school_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Date Of Birth</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                placeholder="Student Date Birth Example">
            @error('date_of_birth')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Student City Example">
            @error('city')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            Crear
        </button>
    </form>
@endsection
