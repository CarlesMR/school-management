@extends('layouts.app')

@section('title', 'Inicio')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Crear Escuela</h1>
        <a href="{{ route('schools.index') }}" class="btn btn-primary my-auto">
            Volver
        </a>
    </div>
@endsection

@section('content')
    <div class="card">
        <form action="{{ route('schools.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                        placeholder="School Name Example">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}"
                        placeholder="School Address Example">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        placeholder="School Email Example">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}"
                        placeholder="School Phone Example">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="web-url" class="form-label">Web Url</label>
                    <input type="text" class="form-control" id="web-url" name="web_url" value="{{ old('web_url') }}"
                        placeholder="School Web URL Example">
                    @error('web_url')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input class="form-control" type="file" id="logo" name="logo">
                    @error('logo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">
                    Crear
                </button>
            </div>
        </form>
    </div>
@endsection
