<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $title??'welcome to lab') | {{config('app.name')}}</title>
    <link href="{{asset('assets/bootstrap/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/app.css')}}" rel="stylesheet"/>
    @stack('header')
    <style>
        main.app {
            display: flex;
            min-height: 100vh;
        }

        aside.app-sidebar {
            flex: 0 0 250px;
            box-shadow: 2px 0 5px #d2d2d2;
        }

        main.app-content {
            flex: 1;
        }
    </style>
</head>
<body>

@if(auth()->check())
    <main class="app">
        <aside class="app-sidebar bg-warning">
            @include('sidebar')
        </aside>
        <main class="app-content">
            @include('header')
            <section class="container-fluid">
                @yield('body')
            </section>
        </main>
    </main>
@else
    <main>
        @yield('body')
    </main>
@endif
<script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="https://kit.fontawesome.com/725d8e3c08.js" crossorigin="anonymous"></script>
<script src="{{asset('assets/app.js')}}"></script>
@stack('footer')
</body>
</html>
