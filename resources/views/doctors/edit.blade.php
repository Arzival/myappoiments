@extends('layouts.app')
@section('content')
    <div>
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Editar Doctor</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('doctors.index') }}"
                            class="btn btn-sm btn-default">Cancelar y Regresar</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('doctors.update', $doctor) }} "
                    method="POST">
                    @csrf @method('PATCH')
                    <div class="form-group">
                        <label for="name">Nombre del médico</label>
                        <input type="text" name="name" class="form-control" required
                            value="{{ $doctor->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="text" name="email" class="form-control"
                            value="{{ $doctor->email }}">
                    </div>

                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" name="dni" class="form-control"
                            value="{{ $doctor->dni }}">
                    </div>

                    <div class="form-group">
                        <label for="specialties">Especialidades</label>
                        <select name="specialties[]" id="" class="form-control"
                            multiple>
                            @foreach ($specialties as $specialty)
                                <option value="{{ $specialty->id }}" @if (in_array($specialty->id, $specialties_id->toArray())) selected @endif>
                                    {{ $specialty->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="addres">Dirección</label>
                        <input type="text" name="addres" class="form-control"
                            value="{{ $doctor->addres }}">
                    </div>

                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" name="phone" class="form-control"
                            value="{{ $doctor->phone }}">
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
