           <!-- Navigation -->
           <ul class="navbar-nav">
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
                        <a class="nav-link" href="{{ route('table') }}">
                          <i class="ni ni-bullet-list-67 text-default"></i>
                          <span class="nav-link-text">Pacientes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="ni ni-circle-08 text-pink"></i> {{ __('Register') }}
                        </a>
                    </li>
                    <li class="nav-item mb-5 mr-4 ml-4 pl-1 bg-danger" style="position: absolute; bottom: 0;">
                        <a class="nav-link text-white" href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">
                            <i class="ni ni-cloud-download-95"></i> Upgrade to PRO
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading text-muted">Reportes</h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/getting-started/overview.html">
                            <i class="ni ni-spaceship"></i> Getting started
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/foundation/colors.html">
                            <i class="ni ni-palette"></i> Foundation
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/components/alerts.html">
                            <i class="ni ni-ui-04"></i> Components
                        </a>
                    </li>
                </ul>