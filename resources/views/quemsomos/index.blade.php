@extends('layouts.app')

@section('title', 'Domo Empreendimentos - Sobre Nós')

@section('content')

    <div id="sobre-nos">

        <div class="banner-page py-5 d-flex align-items-center"
            style="background-image: url({{ asset('assets/images/banners-page/banner-1.jpg') }});">

            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="display-6 text-white text-center">
                            Ética, confiança e credibilidade
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="content py-5">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-5 text-center">
                        <img src="{{ asset('assets/images/sobre-nos.jpg') }}" alt="" class="img-fluid box-image-left">
                    </div>
                    <div class="col-lg-6">
                        <div class="heading mt-5 mb-5">
                            <h2 class="outline-heading">Somos a</h2>
                            <h1 class="text-uppercase">Domo</h1>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Sodales ut etiam sit amet nisl. Sed viverra tellus in hac
                            habitasse. Lorem sed risus ultricies tristique. Purus ut faucibus pulvinar elementum integer
                            enim neque volutpat ac. Quam pellentesque nec nam aliquam sem et tortor consequat. Tincidunt
                            lobortis feugiat vivamus at augue eget. Lobortis scelerisque fermentum dui faucibus in ornare
                            quam viverra orci. Diam vulputate ut pharetra sit amet aliquam id diam maecenas. Nulla malesuada
                            pellentesque elit eget gravida cum sociis natoque. Cras pulvinar mattis nunc sed blandit libero
                            volutpat sed cras. Enim praesent elementum facilisis leo. Ultrices eros in cursus turpis massa.
                            Lacus sed turpis tincidunt id aliquet risus.</p>
                    </div>
                </div>


            </div>

            <div class="bg-primary py-5 mb-5 topics">
                <div class="container">

                    <div class="row">
                        <div class="col-md-3 text-center my-2">
                            <img src="{{ asset('assets/images/icons/1.png') }}" alt="">
                            <h4 class="text-white my-2">Motivação</h4>
                            <small class="text-white">Proporcionar aos nossos clientes, além de morarem bem, vivam melhor.</small>
                        </div>
                        <div class="col-md-3 text-center my-2">
                            <img src="{{ asset('assets/images/icons/2.png') }}" alt="">
                            <h4 class="text-white my-2">Princípio</h4>
                            <small class="text-white">Manter o padrão de qualidade em todas as fases dos nossos empreendimentos.</small>
                        </div>
                        <div class="col-md-3 text-center my-2">
                            <img src="{{ asset('assets/images/icons/3.png') }}" alt="">
                            <h4 class="text-white my-2">Propósito</h4>
                            <small class="text-white">Desenvolver projetos com soluções inovadoras visando o que há de mais moderno.</small>
                        </div>
                        <div class="col-md-3 text-center my-2">
                            <img src="{{ asset('assets/images/icons/4.png') }}" alt="">
                            <h4 class="text-white my-2">Atendimento</h4>
                            <small class="text-white">É uma prioridade, pois relação de proximidade promove confiança e credibilidade.</small>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-12 mb-5">
                        <div class="heading mt-4 mb-5">
                            <h2 class="outline-heading">Parcerias e</h2>
                            <h1>Certificado</h1>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card border-0 p-3 text-center">
                            <img src="{{ asset('assets/images/logo-caixa.png') }}" alt="" class="w-75 mx-auto">
                            <h5 class="text-primary my-3">Parceria com a Caixa</h5>
                            <p>Essa parceria, nos dá possibilidade de financiar 
                                o imóvel já durante a construção, 
                                proporcionando a tranquilidade e segurança 
                                através da garantia que a CAIXA oferece.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 p-3 text-center">
                            <img src="{{ asset('assets/images/logo-pbqph.png') }}" alt="" class="w-75 mx-auto">
                            <h5 class="text-primary my-3">Certificado PBQPh</h5>
                            <p>Conquistamos o Certificado PBQPh. Um 
                                instrumento do Governo Federal que 
                                organiza o setor da Construção Civil em torno da 
                                qualidade do habitat e da modernização produtiva.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
