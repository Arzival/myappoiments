@extends('layouts.app')

@section('content')
    <div>
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Nuevo Paciente</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('patients.index') }}" class="btn btn-sm btn-default">Cancelar y Regresar</a>
                    </div>
                </div>
            </div>
                    <div class="card-body">
                        <form action="{{ route('patients.store') }}" method="POST">
                            @csrf
                                  <div class="form-group">
                                            <label for="name">Nombre del Paciente</label>
                                            <input type="text" name="name" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                           <label for="email">Correo</label>
                                           <input type="text" name="email" class="form-control">
                                 </div>

                                 <div class="form-group">
                                        <label for="dni">DNI</label>
                                        <input type="text" name="dni" class="form-control">
                              </div>

                              <div class="form-group">
                                        <label for="addres">Dirección</label>
                                        <input type="text" name="addres" class="form-control">
                              </div>

                              <div class="form-group">
                                        <label for="phone">Teléfono</label>
                                        <input type="text" name="phone" class="form-control">
                              </div>
                                 <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
          </div>
        </div>
    </div>
@endsection
