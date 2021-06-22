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
                        <a href="{{ route('specialty.create') }}" class="btn btn-sm btn-primary">Nueva Especialidad</a>
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
                        <tr>
                            <th scope="row">
                                /argon/
                            </th>
                            <td>
                                4,569
                            </td>
                            <td>
                                340
                            </td>
                           
                        </tr>
                        <tr>
                            <th scope="row">
                                /argon/index.html
                            </th>
                            <td>
                                3,985
                            </td>
                            <td>
                                319
                            </td>
                            
                        </tr>
                        <tr>
                            <th scope="row">
                                /argon/charts.html
                            </th>
                            <td>
                                3,513
                            </td>
                            <td>
                                294
                            </td>
                        
                        </tr>
                        <tr>
                            <th scope="row">
                                /argon/tables.html
                            </th>
                            <td>
                                2,050
                            </td>
                            <td>
                                147
                            </td>
                           
                        </tr>
                        <tr>
                            <th scope="row">
                                /argon/profile.html
                            </th>
                            <td>
                                1,795
                            </td>
                            <td>
                                190
                            </td>
                           
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
