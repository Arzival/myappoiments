           <!-- Navigation -->
           <ul class="navbar-nav">
                 
                    @if (auth()->user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                            <i class="fab fa-laravel" style="color: #f4645f;"></i>
                            <span class="nav-link-text" style="color: #f4645f;">{{ __('Laravel Examples') }}</span>
                        </a>
    
                        <div class="collapse show" id="navbar-examples">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('profile.edit') }}">
                                        {{ __('User profile') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.index') }}">
                                        {{ __('User Management') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                        <h6 class="navbar-heading text-muted">Gestionar Datos</h6>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('specialty.index') }}">
                                <i class="ni ni-planet text-blue"></i> {{ __('Especialidades') }}
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('doctors.index') }}">
                                <i class="ni ni-pin-3 text-orange"></i> {{ __('Médicos') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('patients.index') }}">
                            <i class="ni ni-bullet-list-67 text-default"></i>
                            <span class="nav-link-text">Pacientes</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ni ni-circle-08 text-pink"></i> {{ __('Register') }}
                            </a>
                        </li>
                    @elseif (auth()->user()->role == 'doctor')

                        <h6 class="navbar-heading text-muted">Menú</h6>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('specialty.index') }}">
                                <i class="ni ni-watch-time text-blue"></i> {{ __('Gestionar horario') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('specialty.index') }}">
                                <i class="ni ni-calendar-grid-58 text-blue"></i> {{ __('Mis citas') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('specialty.index') }}">
                                <i class="ni ni-archive-2 text-blue"></i> {{ __('Mis pacientes') }}
                            </a>
                        </li>
                        @else

                        <h6 class="navbar-heading text-muted">Menú</h6>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('specialty.index') }}">
                                <i class="ni ni-watch-time text-blue"></i> {{ __('Reservar cita') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('specialty.index') }}">
                                <i class="ni ni-calendar-grid-58 text-blue"></i> {{ __('Mis citas') }}
                            </a>
                        </li>
                    @endif
                </>
                <!-- Divider -->
                @if (auth()->user()->role == 'admin')
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading text-muted">Reportes</h6>
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/getting-started/overview.html">
                                <i class="ni ni-spaceship"></i> Frecuencia de citas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/foundation/colors.html">
                                <i class="ni ni-palette"></i> Medicos mas activos
                            </a>
                        </li>
                    </ul>
                @endif