@extends('layouts.app')

@section('content')
    <div>
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Medicos</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('doctors.create') }}"
                            class="btn btn-sm btn-success">Nueva Medico</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (session('notification'))
                    <div class="alert alert-success" role="alert">
                        {{ session('notification') }}
                    </div>
                @endif
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Opciones</th>

                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($doctors as $doctor)
                            <tr>
                                <th scope="row">
                                    {{ $doctor->name }}
                                </th>
                                <td>
                                    {{ $doctor->email }}
                                </td>
                                <td>
                                        {{ $doctor->dni }}
                                </td>
                                <td>
                                    <a href="{{ route('doctors.edit', $doctor) }}"
                                        class="btn btn-sm btn-primary">Editar</a>
                                    <form style="display: inline"
                                        action="{{ route('doctors.destroy', $doctor) }}"
                                        method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-sm btn-danger">Eliminar</button>
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
