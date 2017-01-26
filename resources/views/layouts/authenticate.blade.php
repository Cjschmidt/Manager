<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="/assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/assets/css/shared.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    @yield('css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


</head>
<body class="authenticate">

<main class="authenticate-master">


    <div class="container authenticate-container">

        @yield('main')

    </div>


</main>

<footer>
    <div class="copyright">
        © 2017. Manager by Christian Schmidt
    </div>
    <div id="alerts">

    </div>

</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
@yield('scripts')
<script type="text/javascript" src="/assets/js/shared.min.js"></script>

</body>
</html>