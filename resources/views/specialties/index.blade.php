@extends('layouts.app')

@section('content')
    <div>
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Especialidas</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('specialty.create') }}"
                            class="btn btn-sm btn-success">Nueva Especialidad</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Opciones</th>

                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($specialties as $specialty)
                            <tr>
                                <th scope="row">
                                    {{ $specialty->name }}
                                </th>
                                <td>
                                    {{ $specialty->description }}
                                </td>
                                <td>
                                    <a href="{{ route('specialty.edit', $specialty) }}"
                                        class="btn btn-sm btn-primary">Editar</a>
                                        <form style="display: inline" action="{{ route('specialty.destroy', $specialty) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        </form>
                                    
                                </td>

                            </tr>
                        @empty
                            <h3>No hay especialidades registradas</h3>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
