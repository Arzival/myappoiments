@extends('layouts.app')

@section('content')
    <div>
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Nueva Cita</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('patients.index') }}"
                            class="btn btn-sm btn-default">Cancelar y Regresar</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('patients.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Especialidad</label>
                        <select name="" id="" class="form-control">

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre del Medico</label>
                        <select name="" id="" class="form-control">

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Fecha</label>
                        <input class="form-control" type="date" value="2021-01-27"
                            name="fecha">
                    </div>


                    <div class="form-group">
                        <label for="addres">Hora de atención</label>
                        <input type="text" name="addres" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" name="phone" class="form-control">
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
@section('scripts')

@endsection
