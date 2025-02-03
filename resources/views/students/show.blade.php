@extends('layouts.app')

@section('title', 'Ficha Estudiante')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h1> {{ $student->name }} {{ $student->surnames }}</h1>
                <a href="{{ route('students.index') }}" class="btn btn-primary my-auto">
                    Volver
                </a>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <tr>
                    <td>Escuela</td>
                    <td>{{ $student->school->name }}</td>
                </tr>
                <tr>
                    <td>Fecha Nacimiento</td>
                    <td>{{ $student->date_of_birth->format('d/m/Y') }}</td>
                </tr>
                <tr>
                    <td>Ciudad</td>
                    <td>{{ $student->city }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
