@extends('layouts.app')

@section('content')
    <div>
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Editar Pacient</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('patients.index') }}" class="btn btn-sm btn-default">Cancelar y Regresar</a>
                    </div>
                </div>
            </div>
                    <div class="card-body">
                        <form action="{{ route('patients.update',$patient) }} " method="POST">
                            @csrf @method('PATCH')
                                  <div class="form-group">
                                            <label for="name">Nombre del médico</label>
                                            <input type="text" name="name" class="form-control" required value="{{ $patient->name }}">
                                  </div>
                                  <div class="form-group">
                                           <label for="email">Correo</label>
                                           <input type="text" name="email" class="form-control" value="{{ $patient->email }}">
                                 </div>

                                 <div class="form-group">
                                        <label for="dni">DNI</label>
                                        <input type="text" name="dni" class="form-control" value="{{ $patient->dni }}">
                              </div>

                              <div class="form-group">
                                        <label for="addres">Dirección</label>
                                        <input type="text" name="addres" class="form-control" value="{{ $patient->addres }}">
                              </div>

                              <div class="form-group">
                                        <label for="phone">Teléfono</label>
                                        <input type="text" name="phone" class="form-control" value="{{ $patient->phone }}">
                              </div>

                              <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="text" name="password" class="form-control" value="{{ old('password',Str::random(8)) }}">
                      </div>
                                 <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
          </div>
        </div>
    </div>
@endsection
