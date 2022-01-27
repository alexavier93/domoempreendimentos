<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('/assets/images/favicon.ico') }} ">
    <title> @yield('title')</title>
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Header -->
    <header id="header">

        <div class="header-top bg-primary">
            <div class="container">
                <div class="d-flex justify-content-end">

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li><a href="https://www.facebook.com/domoempreendimento/" class="text-white ms-3"><i
                            class="fab fa-whatsapp"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/domoempreendimento/" class="text-white ms-3"><i
                                    class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/domoempreendimentos/" class="text-white ms-3"><i
                                    class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header-nav bg-white">

            <div class="container">

                <div class="wrap">

                    <div class="logo">
                        @if (route('home'))
                            <a href="{{ route('home') }}" class="logo-main"><img
                                    src="{{ asset('assets/images/domo-empreendimentos.png') }}" alt=""></a>
                        @else
                            <a href="{{ route('home') }}" class="logo-main"><img class="img-fluid"
                                    src="{{ asset('assets/images/domo-empreendimentos.png') }}" alt=""></a>
                        @endif
                        <a href="{{ route('home') }}" class="logo-fix"><img class="img-fluid"
                                src="{{ asset('assets/images/domo-empreendimentos.png') }}" alt=""></a>
                    </div>

                    <div class="menu">

                        <nav class="nav">
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('quemsomos.*') ? 'active' : '' }}" href="{{ route('quemsomos.index') }}">Sobre Nós</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('imoveis.*') ? 'active' : '' }}" href="{{ route('imoveis.index') }}">Empreedimentos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Invista</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Casa Verde e Amarela</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Condomínio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('blog.*') ? 'active' : '' }}" href="{{ route('blog.index') }}" href="">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('contato.*') ? 'active' : '' }}" href="{{ route('contato.index') }}">Contato</a>
                                </li>
                            </ul>
                        </nav>

                    </div>


                    <div class="icon-sidemenu d-lg-none d-flex flex-grow-1 justify-content-end align-items-center">
                        <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>

                </div>

            </div>

        </div>

        <!--Side Nav-->
        <div class="side-menu hidden">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('quemsomos.*') ? 'active' : '' }}" href="{{ route('quemsomos.index') }}">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('imoveis.*') ? 'active' : '' }}" href="{{ route('imoveis.index') }}">Empreedimentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Invista</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Casa Verde e Amarela</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Condomínio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('blog.*') ? 'active' : '' }}" href="{{ route('blog.index') }}" href="">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('contato.*') ? 'active' : '' }}" href="{{ route('contato.index') }}">Contato</a>
                        </li>

                    </ul>
                </nav>

            </div>

        </div>

        <a id="close_side_menu" href="javascript:void(0);"></a>

    </header>
    <!-- Header -->

    <main role="main">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer">

        <div class="footer-top py-5">

            <div class="container">

                <div class="row justify-content-between">

                    <div class="col-sm-12 col-md-6 col-lg-5">

                        <div class="col-12 d-flex justify-content-start">
                            <div class="heading mt-4 mb-5">
                                <h2 class="outline-heading">Entre em</h2>
                                <h1 class="">contato</h1>
                            </div>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Egestas dui id ornare
                            arcu odio ut sem nulla pharetra. Donec ac odio tempor orci dapibus </p>

                            <ul class="nav list-unstyled d-flex">
                                <li class="me-3"><i class="fab fa-whatsapp text-primary fs-5"></i> 11 99302 4773</li>
                                <li><i class="fas fa-phone-alt text-primary"></i> 11 4119 9280</li>
                            </ul>



                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <h3 class="text-primary">Envie sua mensagem</h3>

                        <div class="form-contato mb-3">

                            <form id="formContato" method="POST">

                                @csrf

                                <input type="hidden" name="url" value="{{ route('contato.enviaEmail') }}">

                                <div class="form-group my-3">
                                    <input type="text" name="name" class="form-control" placeholder="Nome" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="E-mail"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="phone" class="form-control telefone"
                                        placeholder="Telefone">
                                </div>
                                <div class="form-group mb-3">
                                    <textarea name="description" class="form-control" rows="5" placeholder="Mensagem"
                                        required></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm mb-2">Enviar</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="bottom-footer">

            <div class="container">

                <div class="clearfix">

                    <p class="col-sm-12 col-md-6 col-lg-6 copy">© {{ now()->year }} Domo Empreendimentos - Todos os
                        direitos reservados</p>

                    <p class="col-sm-12 col-md-6 col-lg-6 dev">
                        Desenvolvido por <a href="https://www.agenciaaffinity.com.br"><img width="90"
                                src="https://agenciaaffinity.com.br/assinatura/affinity-logo-branco.svg"></a>
                    </p>

                </div>

            </div>

        </div>

    </footer>
    <!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/geocomplete/1.7.0/jquery.geocomplete.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false&amp;libraries=places&key=AIzaSyAexUoFpkweVmPfHrClf8SMzt-lzHPmiJs">
    </script>
    <script src="{{ asset('/assets/js/app.js') }} "></script>
</body>

</html>
