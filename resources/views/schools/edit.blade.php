@extends('layouts.app')

@section('title', 'Inicio')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Editar Escuela</h1>
        <a href="{{ route('schools.index') }}" class="btn btn-primary my-auto">
            Volver
        </a>
    </div>
@endsection

@section('content')
    <div class="card">
        <form action="{{ route('schools.update', $school->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', $school->name) }}" placeholder="School Name Example">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address"
                        value="{{ old('address', $school->address) }}" placeholder="School Address Example">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email"
                        value="{{ old('email', $school->email) }}" placeholder="School Email Example">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone"
                        value="{{ old('phone', $school->phone_no) }}" placeholder="School Phone Example">
                </div>

                <div class="mb-3">
                    <label for="web-url" class="form-label">Web Url</label>
                    <input type="text" class="form-control" id="web-url" name="web_url"
                        value="{{ old('web_url', $school->web_url) }}" placeholder="School Web URL Example">
                </div>

                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input class="form-control" type="file" id="logo" name="logo">
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
