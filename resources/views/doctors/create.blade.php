@extends('layouts.app')
@section('styles')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection
@section('content')
    <div>
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Nuevo Doctor</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('doctors.index') }}"
                            class="btn btn-sm btn-default">Cancelar y Regresar</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('doctors.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre del médico</label>
                        <input type="text" name="name" class="form-control" required
                            value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="text" name="email" class="form-control"
                            value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" name="dni" class="form-control"
                            value="{{ old('dni') }}">
                    </div>

                    <div class="form-group">
                        <label for="specialties">Especialidades</label>
                        <select name="specialties[]" id="" class="form-control" multiple>
                            @foreach($specialties as $specialty)
                                <option value="{{ $specialty->id }}">{{ $specialty->name }} ]</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="addres">Dirección</label>
                        <input type="text" name="addres" class="form-control"
                            value="{{ old('addres') }}">
                    </div>

                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" name="phone" class="form-control"
                            value="{{ old('phone') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="text" name="password" class="form-control"
                            value="{{ old('password', Str::random(8)) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

