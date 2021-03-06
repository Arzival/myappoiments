@extends('layouts.app')

@section('content')
    <div>
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Nueva Especialidad</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('specialty.index') }}" class="btn btn-sm btn-default">Cancelar y Regresar</a>
                    </div>
                </div>
            </div>
                    <div class="card-body">
                        <form action="{{ route('specialty.update',$specialty) }}" method="POST">
                            @csrf @method('PATCH')
                                  <div class="form-group">
                                            <label for="name">Nombre de la especialidad</label>
                                            <input type="text" name="name" class="form-control" required value="{{ $specialty->name }}">
                                  </div>
                                  <div class="form-group">
                                           <label for="description">Descripcion de la especialidad</label>
                                           <input type="text" name="description" class="form-control" value="{{ $specialty->description }}"">
                                 </div>
                                 <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
          </div>
        </div>
    </div>
@endsection
