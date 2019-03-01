<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/sticky-footer-navbar.css">
        <link rel="stylesheet" href="/css/application.css">
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        @yield('additional_js')

    </head>
    <body>
        <nav class='navbar navbar-expand-md navbar-light fixed-top bg-light'>
            <a class='navbar-brand' href='/'>Sportweb</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarCollapse' aria-controls='navbarCollapse' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarCollapse'>
                <div id='nav_menu'>
                    <ul class='navbar-nav mr-auto'>
                        <li class='nav-item'>
                            <a class='nav-link' href='/'>ホーム<span class='sr-only'>(current)</span></a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='/users/login_form'>ログイン<span class='sr-only'>(current)</span></a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='/users/new'>利用開始登録<span class='sr-only'>(current)</span></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <br><br><br>

        @yield('content')

        @include('layouts.footer', ['footer_text' => 'Spoertweb'])

    </body>
</html>
