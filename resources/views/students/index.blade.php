@extends('layouts.app')

@section('title', 'Estudiantes')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Listado Estudiantes</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary my-auto">
            Crear Estudiante
        </a>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th width="25%">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>
                                {{ $student->name }}
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-primary me-1">
                                        Editar
                                    </a>
                                    <a href="{{ route('students.show', $student->id) }}"
                                        class="btn btn-sm btn-success me-1">
                                        Ver
                                    </a>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if (!empty($students) && $students->hasPages())
            <div class="card-footer">
                {{ $students->links() }}
            </div>
        @endif
    </div>
@endsection
