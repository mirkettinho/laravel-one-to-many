<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">


      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
          <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <div class="logo_laravel">
                        ADMIN
                </div>
                    {{-- config('app.name', 'Laravel') --}}
            </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                  @auth()

                  <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" target="blank" href="{{route("home") }}">Public Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route("admin.projects.create")}}">Aggiungi Prodotto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route("admin.projects.index")}}">lista progetti</a>
                </li>
                  </ul>
                  @endauth

                    <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                        @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                        @endif
                        @else
                    <li class="nav-item">
                        <h5>{{ Auth::user()->name }}</h5>
                    </li>
                    <li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                        <button type="submit" class="btn btn-danger">LOGOUT</button>
                      </form>
                    </li>
              </div>

                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>
