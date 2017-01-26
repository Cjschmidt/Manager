<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="/assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/assets/css/shared.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="stylesheet" href="/assets/css/backend.css">
    @yield('css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


</head>
<body class="backend @yield('body-class')">

<main class="backend-master">


    <div class="top-bar">
        <div class="logo">
            Your<span>Club</span>
        </div>
        <div class="settings">
            <div class="icon icon-cogs"></div>
        </div>
    </div>
    <div class="left-menu">
        <div class="menu-header active">
            <span> @lang('backend.overviews')</span><span><i class="expand icon-circle-up"></i></span>

            <div class="menu-items">
                <a class="menu-item" href="/dashboard"><i class="icon-meter"></i>@lang('backend.dashboard')</a>
                <a class="menu-item" href="/users"><i class="icon-user-tie"></i>@lang('general.users')</a>
                <a class="menu-item" href="/clubs"><i class="icon-users"></i>@lang('general.clubs')</a>
                <a class="menu-item" href="/leagues"><i class="icon-list"></i>@lang('general.leagues')</a>

            </div>
        </div>
        <div class="menu-header active">
            <span> @lang('backend.overviews')</span><span><i class="expand icon-circle-up"></i></span>

            <div class="menu-items">
                <a class="menu-item" href="/dashboard"><i class="icon-meter"></i>@lang('backend.dashboard')</a>
                <a class="menu-item" href="/users"><i class="icon-user-tie"></i>@lang('general.users')</a>
                <a class="menu-item" href="/clubs"><i class="icon-users"></i>@lang('general.clubs')</a>
                <a class="menu-item" href="/leagues"><i class="icon-list"></i>@lang('general.leagues')</a>

            </div>
        </div>
    </div>

    <div class="backend-content">
        <div class="container-fluid">
            @yield('main')
        </div>
    </div>


</main>

<footer>
    <div id="alerts">

    </div>

</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
@yield('scripts')
<script type="text/javascript" src="/assets/js/shared.min.js"></script>
<script type="text/javascript" src="/assets/js/backend.min.js"></script>

</body>
</html>