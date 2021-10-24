<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="{{asset('site/assets/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('site/assets/css/style_home.css')}}">
    <link rel='stylesheet' href="{{asset('site/assets/css/style_login.css')}}">
    <link rel="stylesheet" href="{{asset('site/assets/css/style_planos.css')}}">
    <title>home-crud-electra</title>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light style_electra_navbar_header">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://electra.com.br/web/"><img src="{{url('site/images/logo/logo.png')}}"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item ">
                            <a class="nav-link
                                nav-link-electra" href="{{route('site.home')}}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" class="nav-link nav-link-electra" href="https://electra.com.br/web/universidade-corporativa/">UNIVERSIDADE CORPORATIVA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-electra" href="{{route('site.planos')}}">PLANOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-electra" href="{{route('site.login')}}">LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; {{date('y')}} Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>

    <script src="{{asset('site/assets/js/jquery.js')}}"></script>
    <script src="{{asset('site/assets/js/bootstrap.js')}}"></script>
</body>

</html>
