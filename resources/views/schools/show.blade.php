@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h1> {{ $school->name }}</h1>
                <a href="{{ route('schools.index') }}" class="btn btn-primary my-auto">
                    Volver
                </a>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <tr>
                    <td>Dirección</td>
                    <td>{{ $school->address }}</td>
                </tr>
                <tr>
                    <td>Correo Electrónico</td>
                    <td>{{ $school->email }}</td>
                </tr>
                <tr>
                    <td>Teléfono</td>
                    <td>{{ $school->phone_no }}</td>
                </tr>
                <tr>
                    <td>URL Web</td>
                    <td>{{ $school->web_url }}</td>
                </tr>
            </table>

            <img src="{{ asset('storage/schools/' . $school->logo) }}" alt="">
        </div>
    </div>
@endsection
