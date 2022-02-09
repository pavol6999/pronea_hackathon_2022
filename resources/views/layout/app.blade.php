<!doctype html>
<html lang="sk">
<head>
    @include('layout.partials.head')
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>

<body class="d-flex flex-column min-vh-100">
    @include('layout.partials.nav')
  
    @yield('content')

    
    @include('layout.partials.modal')
    
    @include('layout.partials.footer')
    <a class="survey_button" data-bs-toggle="modal" data-bs-target="#survey"><button type="button" class="btn btn-primary">Take a survey</button></a>
</body>
</html>     