<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
  
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.min.css') }}">
    <link href="{{ asset('assets/img/logo2.png') }}" rel="shortcut icon">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @livewireScripts
    <script src="{{ asset('assets/js/turbolinks.js')}}"></script>
    <script src="{{ asset('assets/js/turbolinks.min.js')}}"></script>

    @livewireStyles

    
</head>

<body>

    <livewire:components.header />
    @yield('content')
   
    @include('components.footer')
    @flasher_render
    <!-- this render all flasher notifications. -->
    @flasher_livewire_render
    <!-- this render livewire notifications only. -->
    <script src="{{ asset('assets/js/alpine.min.js') }}"></script>

    
</body>

</html>
