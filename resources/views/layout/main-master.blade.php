    <head>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

    <body style ="min-height: 100vh; display: flex; flex-direction: column;">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navigation</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="{{ Route::is('act3home') ? 'active' : '' }} nav-link" aria-current="page"
                                href="{{ route('act3home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Route::is('act3contact') ? 'active' : '' }} nav-link"
                                href="{{ route('act3contact') }}">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Route::is('act3blogs') ? 'active' : '' }} nav-link"
                                href="{{ route('act3blogs') }}">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Route::is('act3about') ? 'active' : '' }} nav-link"
                                href="{{ route('act3about') }}">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')

        @include('layout.footer')
    </body>
