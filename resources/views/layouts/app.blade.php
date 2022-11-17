<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIMPLE SITE</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{mix('/css/app.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Navigation-->
    @yield('header')
    <!-- Masthead-->
    @yield('masthead')
    <!-- articles Section-->
    @yield('content')
    <!-- About Section-->
    @yield('about')

    <!-- Footer-->
    <footer class="footer text-center">
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; My simple site 2022</small></div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    @yield('vue')
</body>

</html>
