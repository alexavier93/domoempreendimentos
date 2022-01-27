@extends('layouts.app')

@section('title', 'Domo Empreendimentos - Imóveis')

@section('content')

    <div id="empreendimentos">

        <div class="banner-page py-5 d-flex align-items-center"
            style="background-image: url({{ asset('assets/images/banners-page/banner-1.jpg') }});">

            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="display-6 text-white text-center">
                            Encontre o seu imóvel aqui na domo e comece a viver melhor!
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="content py-5">

            <div class="container">

                <div class="row">

                    <div class="col-12 d-flex justify-content-center my-5">
                        <div class="heading text-center">
                            <h2 class="outline-heading">Encontre seu</h2>
                            <h1 class="text-uppercase">Domo</h1>
                        </div>
                    </div>

                    <div class="col-12 my-4">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="false">Todos</button>
                            </li>
                            
                            @foreach ($categorias as $categoria)

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-{{ $categoria->slug }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $categoria->slug }}" type="button" role="tab" aria-controls="pills-{{ $categoria->slug }}" aria-selected="false">{{ $categoria->nome }}</button>
                                </li>

                            @endforeach

                        </ul>

                    </div>

                    <div class="col-12 lista">

                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">

                                <div class="row">

                                    @foreach ($imoveis as $imovel)

                                    <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                                        <a href="{{ route('imoveis.info', ['slug' => $imovel->slug]) }}" class="empreendimento-item d-block text-dark shadow">
                                            <div class="empreendimento-img">
                                                <img src="{{ asset('storage/' . $imovel->imagem) }}" alt="{{ $imovel->nome }}" class="w-100">
                                            </div>
                                            <div class="content bg-white p-4 border-1">
                                                <h4 class="text-primary m-0">{{ $imovel->nome }}</h4>
                                                <span class="badge bg-primary mb-3">em obras</span>
                                                <ul class="list-unstyled m-0">
                                                    <li class="mb-1"><i class="fas fa-map-marker-alt text-primary me-1"></i> {{ $imovel->lougradouro .' - '. $imovel->bairro .' - '. $imovel->estado }}</li>
                                                    <li class="mb-1"><i class="fas fa-bed text-primary me-1"></i> 2 Dorms</li>
                                                    <li class="mb-1"><i class="fas fa-car text-primary me-1"></i> 1 Vaga</li>
                                                    <li class="mb-1"><i class="fas fa-ruler-combined text-primary me-1"></i> 35m² à 44m²</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>

                                    @endforeach

                                </div>

                            </div>


                            @foreach ($categorias as $categoria)
                            
                                <div class="tab-pane fade" id="pills-{{ $categoria->slug }}" role="tabpanel" aria-labelledby="pills-{{ $categoria->slug }}-tab">

                                    <div class="row">

                                        @foreach ($imoveis as $imovel)

                                        @if ($categoria->id == $imovel->categoria_id)
                                      
                                        <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                                            <a href="{{ route('imoveis.info', ['slug' => $imovel->slug]) }}" class="empreendimento-item d-block text-dark shadow">
                                                <div class="empreendimento-img">
                                                    <img src="{{ asset('storage/' . $imovel->imagem) }}" alt="{{ $imovel->nome }}" class="w-100">
                                                </div>
                                                <div class="content bg-white p-4 border-1">
                                                    <h4 class="text-primary m-0">{{ $imovel->nome }}</h4>
                                                    <span class="badge bg-primary mb-3">em obras</span>
                                                    <ul class="list-unstyled m-0">
                                                        <li class="mb-1"><i class="fas fa-map-marker-alt text-primary me-1"></i> {{ $imovel->lougradouro .' - '. $imovel->bairro .' - '. $imovel->estado }}</li>
                                                        <li class="mb-1"><i class="fas fa-bed text-primary me-1"></i> 2 Dorms</li>
                                                        <li class="mb-1"><i class="fas fa-car text-primary me-1"></i> 1 Vaga</li>
                                                        <li class="mb-1"><i class="fas fa-ruler-combined text-primary me-1"></i> 35m² à 44m²</li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>

                                        @endif

                                        @endforeach

                                    </div>

                                </div>

                            @endforeach

                          </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

@endsection
