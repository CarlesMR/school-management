@extends('layouts.app')

@section('title', 'Escuelas')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Listado Escuelas</h1>
        <a href="{{ route('schools.create') }}" class="btn btn-primary my-auto">
            Crear Escuela
        </a>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>Escuela</th>
                        <th width="25%">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schools as $school)
                        <tr>
                            <td>
                                {{ $school->name }}
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('schools.edit', $school->id) }}" class="me-1 btn btn-sm btn-primary">
                                        Editar
                                    </a>
                                    <a href="{{ route('schools.show', $school->id) }}" class="btn btn-sm btn-success me-1">
                                        Ver
                                    </a>
                                    <form action="{{ route('schools.destroy', $school->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger ">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if (!empty($schools) && $schools->hasPages())
            <div class="card-footer">
                {{ $schools->links() }}
            </div>
        @endif
    </div>
@endsection
