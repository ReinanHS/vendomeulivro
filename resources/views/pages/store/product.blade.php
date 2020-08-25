@extends('layouts.app', ['seo' => $seo])
@section('content')


<section class="product-section mb-4">
    <div class="container mt-4">
        <div class="back-link">
            <a href="{{ url('/busca/'.$data['title']) }}"> &lt;&lt; Voltar aos resultados</a>
        </div>
        <div class="row mt-4 product-box">
            <product-image src-image="{{$data['image'] }}" alt-image="{{$data['title'] }}"></product-image>
            <div class="col-lg-7 col-sm-12 mt-4 mt-xl-0 product-details">
                <h2 class="p-title">{{$data['title'] }}</h2>
                <p class="book-author">
                    @foreach ($data['book']['authors'] as $name)
                    Autor <a href="#">{{ $name }}</a>
                    @endforeach
                </p>
                <p class="book-publishing">
                    Editora: <a href="#">{{$data['book']['publisher'] }}</a>
                </p>
                <div class="d-flex">
                    <div class="section-price">
                        <h3 class="p-price">R${{$data['price'] }}</h3>
                        <h4 class="p-stock">Disponível: <span>Google Livros</span></h4>
                    </div>
                    <div class="section-rating d-flex justify-content-end">
                        <div>
                            <h3 class="p-price text-center">4.5</h3>
                            <h4>
                                <span style="background: rgba(0, 0, 0, 0) linear-gradient(to right, rgb(255, 204, 51) 92.4%, rgb(204, 204, 204) 70%) repeat scroll 0% 0% padding-box text;" aria-hidden="true">★★★★★</span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="product-bay">
                    <a class="btn-loja" href="#">Ir à loja</a>
                </div>
                <div class="accordion accordion-area" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <button class="card-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Informação
                            </button>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                {{ Str::limit($data['description'], 100, '...') }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <button class="card-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Histórico de preços
                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                oi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 product-info">
                <div class="container">
                    <h2 class="title mb-4">Características</h2>
                    <ul class="list-features">
                        <li class="list-item">
                            <strong>Título do livro</strong>
                            <span>{{$data['title'] }}</span>
                        </li>
                        <li class="list-item">
                            <strong>Autor</strong>
                            <span>
                                @foreach ($data['book']['authors'] as $item)
                                    {{ $item }},
                                @endforeach
                            </span>
                        </li>
                        <li class="list-item">
                            <strong>Idioma</strong>
                            <span>{{$data['book']['language'] }}</span>
                        </li>
                        <li class="list-item">
                            <strong>Editora</strong>
                            <span>{{$data['book']['publisher'] }}</span>
                        </li>
                        <li class="list-item">
                            <strong>Formato</strong>
                            <span>{{$data['book']['type'] }}</span>
                        </li>
                        <li class="list-item">
                            <strong>Tipo de narração</strong>
                            <span>{{$data['book']['narration'] }}</span>
                        </li>
                        <li class="list-item">
                            <strong>ISBN</strong>
                            <span>{{$data['book']['isbn'] }}</span>
                        </li>
                        <li class="list-item">
                            <strong>Ano de publicação</strong>
                            <span>{{$data['book']['publishedDate'] }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 mt-4 product-info">
                <div class="container">
                    <h2 class="title mb-4">Descrição</h2>
                    <div class="item-description-text">
                        <p>{{$data['description'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 product-info">
                <product-rating :product="'{{ $data['id'] }}'"></product-rating>
            </div>
            <div class="col-12 mt-4 product-info">
                <div class="container perguntas">
                    <h2 class="title mb-4">Perguntas e respostas</h2>
                    <p class="subtitle mt-4">Qual informação você precisa?</p>
                    <div class="row">
                        <div class="col-12 mt-3 mt-md-0">
                            <a href="#" class="btn btn-outline-primary">Custo e prazo de envio</a>
                            <a href="#" class="btn btn-outline-primary">Meios de pagamento</a>
                            <a href="#" class="btn btn-outline-primary">Garantia</a>
                            <a href="#" class="btn btn-outline-primary">Devoluções grátis</a>
                        </div>
                    </div>
                    <p class="subtitle mt-4">Ou pergunte ao vendedor</p>
                    <pergunta-vendedor :product="'{{ $data['id'] }}'"></pergunta-vendedor>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid"></div>
</section>
<modal-avaliacao></modal-avaliacao>
@endsection
