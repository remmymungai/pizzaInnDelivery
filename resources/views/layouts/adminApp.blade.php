<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Menu</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <script src="https://use.fontawesome.com/ceb0a10218.js"></script>
        <script src="{{ asset('js/scripts.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
    @include('includes.adminNavbar')
    <br><br><br><br><br>
        <div class="content">
            @yield('content')
        </div>
    @include('includes.footer')
    </body>
</html>