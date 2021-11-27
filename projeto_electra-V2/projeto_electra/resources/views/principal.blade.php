<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Electra Treinamentos</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/principal.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light">

            <div class="container-fluid">
                <a class="link_logo navbar-brand" href="/"><img src="images/logo/logo.png"></a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="ml-4" href="#">SOBRE NÓS</a></li>

                    <li><a class="ml-4" href="#">UNIVERSIDADE CORPORATIVA</a></li>
                </ul>
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <a href="{{route('home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{strtoupper(Auth::user()->name)}}</a>
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">LOGIN</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">MATRICULAR</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </nav>
    </header>
    </header>
    <main class="main_top mb-4" role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/carousel/imagem1.png')}}" alt="">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Example headline.</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/carousel/imagem2.png')}}" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title> </title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"> </text>
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                    </svg>

                    <h2>Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                    </svg>

                    <h2>Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                    </svg>

                    <h2>Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>

                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Nossos Serviços <span class="text-muted"></br>O que fazemos</span></h2>
                    <p class="lead">A ELECTRA possui infraestrutura em constante evolução para atendimento dos diversos tipos de projetos em que atende.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Sobre a ELECTRA</br> <span class="text-muted">Fundação, história e diretoria</span></h2>
                    <p class="lead">A ELECTRA foi fundada em 1984, em um momento em que os brasileiros estavam começando a avaliar o uso do computador em suas rotinas de
                        vida e de trabalho.

                        Em 1997, já havia desenvolvido alguns outros projetos quando inovou na metodologia de produção e conseguiu alcançar novos mercados, especialista em Desenvolvimento de Software.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg>

                </div>
            </div>



            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->



    </main>


    <!-- FOOTER -->
    <footer class="mt-4 footer_style">
        <div class="container footer_style">

            <div class="row ">
                <div class="mt-4 col-md-4">
                    <h2>A ELECTRA</h2>
                    <p>Somos especialistas em produção de software para WEB: Sistemas de Gestão, Lojas Virtuais, APP Mobile, Sites institucionais, Otimização para buscas de sites e muito mais. CNPJ: 03.997.131/0001-83 </p>

                </div>
                <div class="mt-4 col-md-4">
                    <h2>CONTATO</h2>
                    <p>Núcleo de Produção:
                        Av. Itamarati, 1616 - Pq. Jaçatuba
                        Santo André - SP</p>
                    <p>
                        Universidade Corporativa:
                        Av. Prestes Maia, 744 - B. Campestre
                        Santo André - SP
                    </p>
                    <p>
                        (11) 4472-9191 | (11) 2988-4680 | (11) 9-4386-1347
                    </p>
                    <p>
                        info@electra.com.br
                    </p>

                </div>
                <div class="mt-4 col-md-4">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

                </div>
                <hr>
                <p class="float-right fixed-bottom"><a href="#">Back to top</a></p>
                <p>&copy; 2017-2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </div>




        </div>


    </footer>
    </main>


    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>


</body>

</html>
