@extends('layouts.app')

@section('title', 'Domo Empreendimentos')

@section('content')

    <div id="home">

        <div class="main-slider shadow-lg">
            <div class="swiper swiperSlideHome">
                <div class="swiper-wrapper">
                    @foreach ($banners as $banner)
                        <div class="swiper-slide">
                            <div class="slide d-flex align-items-end" style="background-image: url({{ asset('storage/'. $banner->image) }});">
                                <div class="container d-flex justify-content-start">
                                    <div class="content text-start mb-5">
                                        @if ($banner->description)
                                            <h5 class="text-white">{{ $banner->description }}</h5>
                                        @endif
                                        <h2 class="text-white fw-bold">{{ $banner->title }}</h2>
                                        @if ($banner->link)
                                            <a href="{{ $banner->link }}" class="btn btn-primary btn-sm">saiba mais</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>


        <section class="domo py-5">

            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-5 text-center">
                        <img src="{{ asset('assets/images/sobre-nos.jpg') }}" alt="" class="img-fluid box-image-left">
                    </div>
                    <div class="col-lg-5">
                        <div class="heading mt-4 mb-5">
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
                        <a href="" class="btn btn-primary rounded-0">saiba mais</a>
                    </div>
                </div>
            </div>

        </section>

        <section class="video py-5">

            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="col col-md-8">
                        <a href="" class="d-block" data-fancybox="video">
                            <img src="{{ asset('assets/images/thumb-video.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                
                
            </div>

        </section>

        <section class="empreendimentos py-5">

            <div class="container">

                <div class="col-12 d-flex justify-content-start">
                    <div class="heading mt-4 mb-5">
                        <h2 class="text-primary">Empreendimentos</h2>
                    </div>
                </div>

                <div class="row align-items-start">

                    <div class="col-lg-3">

                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                            <button class="nav-link active" id="v-pills-all-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-all" type="button" role="tab" aria-controls="v-pills-all"
                                aria-selected="true">Todos</button>

                            @foreach ($categorias as $categoria)
                                <button class="nav-link" id="v-pills-{{ $categoria->slug }}-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-{{ $categoria->slug }}" type="button" role="tab" aria-controls="v-pills-{{ $categoria->slug }}"
                                aria-selected="false">{{ $categoria->nome }}</button>
                            @endforeach

                        </div>

                    </div>

                    <div class="col-lg-9">
                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">

                                <div class="swiper swiperEmpreendimentos pt-2 pb-5 px-2">

                                    <div class="swiper-wrapper">

                                        @foreach ($imoveis as $imovel)
                                            <div class="swiper-slide">
                                                <a href="{{ route('imoveis.info', ['slug' => $imovel->slug]) }}" class="empreendimento-item d-block text-decoration-none">
                                                    <div class="empreendimento-image">
                                                        <img src="{{ asset('storage/' . $imovel->imagem) }}" alt="" class="w-100">
                                                    </div>
                                                    <div class="overlay"></div>
    
                                                    <div class="empreendimento-info d-flex flex-column justify-content-end p-3">
                                                        <h5 class="fw-bold text-white m-0">{{ $imovel->nome }}</h5>
                                                        <small class="text-white m-0">{{ $imovel->lougradouro .' - '. $imovel->bairro .' - '. $imovel->estado }}</small>
                                                    </div>
                                                </a>
                                            </div>

                                        @endforeach
                                        

                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <div class="swiper-pagination"></div>
                                    </div>
            
                                </div>
                            
                            </div>


                            @foreach ($categorias as $categoria)
                                <div class="tab-pane fade" id="v-pills-{{ $categoria->slug }}" role="tabpanel" aria-labelledby="v-pills-{{ $categoria->slug }}-tab">

                                    <div class="swiper swiperEmpreendimentos pt-2 pb-5 px-2">

                                        <div class="swiper-wrapper">

                                            @if($imoveis)
                                                @foreach ($imoveis as $imovel)
                                                @if ($categoria->id == $imovel->categoria_id)
        
                                                <div class="swiper-slide">
                                                    <a href="{{ route('imoveis.info', ['slug' => $imovel->slug]) }}" class="empreendimento-item d-block text-decoration-none">
                                                        <div class="empreendimento-image">
                                                            <img src="{{ asset('storage/' . $imovel->imagem) }}" alt="" class="w-100">
                                                        </div>
                                                        <div class="overlay"></div>
        
                                                        <div class="empreendimento-info d-flex flex-column justify-content-end p-3">
                                                            <h5 class="fw-bold text-white m-0">{{ $imovel->nome }}</h5>
                                                            <small class="text-white m-0">{{ $imovel->lougradouro .' - '. $imovel->bairro .' - '. $imovel->estado }}</small>
                                                        </div>
                                                    </a>
                                                </div>

                                                @endif
                                                @endforeach
                                                    
                                            @else

                                                <h4>Nenhum empreendimento encontrado</h4>

                                            @endif
    
                                        </div>
    
                                        <div class="col-12 d-flex justify-content-end">
                                            <div class="swiper-pagination"></div>
                                        </div>
                
                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="blog py-5">

            <div class="container">

                <div class="col-12 d-flex justify-content-end">
                    <div class="heading mt-4 mb-5">
                        <h2 class="outline-heading">Blog da</h2>
                        <h1 class="text-uppercase">Domo</h1>
                    </div>
                </div>

                <div class="posts row">

                    <div class="swiper swiperBlog pt-2 pb-5 px-2">
                        <div class="swiper-wrapper">

                            @foreach ($posts as $post)
                            <div class="swiper-slide">
                                <a href="{{ route('blog.posts', ['post' => $post->slug]) }}" class="card border-0 p-3 text-decoration-none shadow">
                                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" title="{{ $post->title }}" class="w-100 mb-3" >
                                    <h5 class="titulo-post fw-bold text-primary">{{ Str::limit($post->title, 60) }}</h5>
                                    <span class="text-dark">Ler mais...</span>
                                </a>
                            </div>
                            @endforeach
                            
                        </div>
                        <div class="col-5">
                            <div class="swiper-pagination"></div>
                        </div>
            

                    </div>


                </div>


            </div>

        </section>


        <section class="depoimentos py-5 bg-primary">

            <div class="container">

                <div class="col-12 text-center">
                    <div class="heading mt-4 mb-5">
                        <h2 class="outline-heading text-primary">Depoimentos</h2>
                        <h1 class="text-white">de clientes</h1>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="col-12 col-md-9">
                        <div class="swiper swiperDepoimentos">
                            <div class="swiper-wrapper">

                                @foreach ($depoimentos as $depoimento)
                                <div class="swiper-slide">
                                    <div class="p-4 text-center">
                                        <img src="{{ asset('storage/'. $depoimento->imagem) }}" alt="" class="p-2 bg-white mb-3">
                                        <div class="text-white descricao fw-light mb-2">{!! $depoimento->texto !!}</div>
                                        <h4 class="text-white">{{ $depoimento->nome }}</h4>
                                        <p class="text-white">{{ $depoimento->empreendimento }}</p>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                </div>




            </div>

        </section>

    </div>



@endsection
