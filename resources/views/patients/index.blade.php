@extends('layouts.app')

@section('content')
    <div>
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Pacientes</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('patients.create') }}"
                            class="btn btn-sm btn-success">Nuevo Paciente</a>
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

                        @forelse ($patients as $patient)
                            <tr>
                                <th scope="row">
                                    {{ $patient->name }}
                                </th>
                                <td>
                                    {{ $patient->email }}
                                </td>
                                <td>
                                        {{ $patient->dni }}
                                </td>
                                <td>
                                    <a href="{{ route('patients.edit', $patient) }}"
                                        class="btn btn-sm btn-primary">Editar</a>
                                    <form style="display: inline"
                                        action="{{ route('patients.destroy', $patient) }}"
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
            <div class="card-body">
                {{ $patients->links() }}
            </div>
        </div>
        
    </div>
@endsection
