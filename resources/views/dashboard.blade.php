@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('schools.index') }}" class="btn btn-primary btn-block w-100 mb-3">
                Escuelas
            </a>
            <a href="{{ route('students.index') }}" class="btn btn-primary btn-block w-100 mb-3">
                Estudiantes
            </a>
        </div>
    </div>
@endsection
