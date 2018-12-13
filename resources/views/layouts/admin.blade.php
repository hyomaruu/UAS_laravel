<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
    <div id="app" class="row">
        <div class="col-md-3">
            <div class="text-center">
                <hr>
                <nav class="navbar navbar-dark bg-primary">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="{{ url('/admin/home/home') }}" class="nav-link " style="width: 100%;">Home</a>
                </li>
                <li class="nav-item active">    
                    <a href="{{ url('/admin/gudang/data') }}" class="nav-link " style="width: 100%;">Gudang</a>
                    </li>
                <li class="nav-item active">    
                    <a href="{{ url('/admin/barang/data') }}" class="nav-link " style="width: 100%;">Barang</a>
                    </li>
                <li class="nav-item active">        
                    <a href="{{ route ('logout') }}" class="nav-link" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                    </ul>
                </nav>
            </div>
        </div>

        <main class="col-md-9" style="width: 100%;">
            @yield('content')
        </main>
    </div>
    </div>
</body>
</html>
