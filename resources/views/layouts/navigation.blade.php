<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">

                    <li class="nav-item @if (request()->routeIs('home')) active @endif">
                        <a class="nav-link" href="{{ route('home') }}">
                            <span class="nav-link-title">
                                {{ __('Dashboard') }}
                            </span>
                        </a>
                    </li>

                    @can('admin')
                        <li class="nav-item @if (request()->routeIs('users.index')) active @endif">
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <span class="nav-link-title">
                                    {{ __('Users') }}
                                </span>
                            </a>
                        </li>


                        <li class="nav-item @if (request()->routeIs('reports.*')) active @endif">
                            <a class="nav-link" href="{{ route('reports.create') }}">
                                <span class="nav-link-title">
                                    {{ __('Hasil Pemeriksaan') }}
                                </span>
                            </a>
                        </li>

                        <li class="nav-item @if (request()->routeIs('admiDetail.*')) active @endif">
                            <a class="nav-link" href="{{ route('admiDetail.index') }}">
                                <span class="nav-link-title">
                                    {{ __('Data Remaja') }}
                                </span>
                            </a>
                        </li>
                    @endcan

                    @if (!auth()->user()->admin)
                        <li class="nav-item @if (request()->routeIs('details.*')) active @endif">
                            <a class="nav-link" href="{{ route('details.create') }}">
                                <span class="nav-link-title">
                                    {{ __('Info Profile') }}
                                </span>
                            </a>
                        </li>
                    @endif


                </ul>
            </div>
        </div>
    </div>
</div>
