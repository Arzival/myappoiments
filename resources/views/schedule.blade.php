@extends('layouts.app')

@section('content')
<div>
<form action="{{ route('schedule.store') }}" method="POST">
          @csrf
          <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Gestionar horarios</h3>
                            </div>
                            <div class="col text-right">
                                <button type="submit"
                                    class="btn btn-sm btn-success">Guardar Cambios</button>
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
                                    <th scope="col">Día</th>
                                    <th scope="col">Activo</th>
                                    <th scope="col">Turno mañana</th>
                                    <th scope="col">Turno tarde</th>
        
                                </tr>
                            </thead>
                            <tbody>
                                      @forelse ($days as $key => $day)
                                      <tr>
                                              <th>{{ $day }}</th>
                                              <td>
                                                    <label class="custom-toggle">
                                                    <input type="checkbox" name="active[]" value="{{ $key }}">
                                                    <span class="custom-toggle-slider rounded-circle"></span>
                                                  </label>
                                              </td>
                                              <td>
                                                        <div class="row">
                                                                  <div class="col">
                                                                            <select name="morning_start[]" id="" class="form-control">
                                                                                      @for ($i = 5; $i <=12 ; $i++)
                                                                                      <option>{{ $i }}:00 am</option>
                                                                                      <option>{{ $i }}:30 am</option>
                                                                                
                                                                            @endfor
                                                                            </select>
                                                                  </div>
                                                                  <div class="col">
                                                                            <select name="morning_end[]"" id="" class="form-control">
                                                                                      @for ($i = 5; $i <=12 ; $i++)
                                                                                      <option>{{ $i }}:00 am</option>
                                                                                      <option>{{ $i }}:30 am</option>
                                                                                
                                                                            @endfor
                                                                            </select>
                                                                  </div>
                                                        </div>
                                              </td>
                                              <td>
                                                        <div class="row">
                                                                  <div class="col">
                                                                            <select name="afternoon_start[]" id="" class="form-control">
                                                                                      @for ($i = 1; $i <=11 ; $i++)
                                                                                      <option>{{ $i }}:00 pm</option>
                                                                                      <option>{{ $i }}:30 pm</option>
                                                                                
                                                                            @endfor
                                                                            </select>
                                                                  </div>
                                                                  <div class="col">
                                                                            <select name="afternoon_end[]" id="" class="form-control">
                                                                                      @for ($i = 1; $i <=11 ; $i++)
                                                                                      <option>{{ $i }}:00 pm</option>
                                                                                      <option>{{ $i }}:30 pm</option>
                                                                                
                                                                            @endfor
                                                                            </select>
                                                                  </div>
                                                        </div>
                                              </td>
                                    </tr>
                                      @empty
                                          
                                      @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
</form>
      </div>
@endsection

@push('js')
    <script src="{{ asset('/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('/vendor/chart.js/dist/Chart.extension.js') }}"></script>
@endpush