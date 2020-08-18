@extends('layouts.app')
@section('content')

<div class="container pt-5 hero">
    <div class="row align-items-center text-center text-md-left">
       <div class="col-lg-4">
          <h1 class="mb-3 display-4">Com o que podemos ajudar?</h1>
          <p>Bem-vindo a nossa central de atendimento, antes de entrar em contato conosco visite nossa página de perguntas frequentes ou entre em contato conosco em nossos canais de atendimento.</p>
       </div>
       <div class="col-lg-8">
          <img src="{{ 'img/vector/asset-1.png' }}" alt="Image" class="img-fluid">
       </div>
    </div>
</div>

<section class="infoboxes">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm" data-aos="fade-right">
                    <a href="#sobre/1">
                        <img class="img-fluid" src="{{ 'img/vector/6604.jpg' }}" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">Vendo Meu Livro</h5>
                            <p class="card-text">O que é, saiba toda a história dessa empresa.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm" data-aos="fade-left">
                    <a href="#pagamentos/2">
                        <img class="img-fluid" src="{{ 'img/vector/3567818.jpg' }}" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">Esse site é seguro?</h5>
                            <p class="card-text">receba o produto que está esperando ou devolvemos o seu dinheiro.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm" data-aos="fade-left">
                    <a href="#pagamentos/3">
                        <img class="img-fluid" src="{{ 'img/vector/2887079.jpg' }}" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">Como devolvo um produto?</h5>
                            <p class="card-text">Para devolver um produto, pesquise a opção “Devolver ou trocar grátis”.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm" data-aos="fade-right">
                    <a href="#vender/1">
                        <img class="img-fluid" src="{{ 'img/vector/19198.jpg' }}" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">Como vender um produto?</h5>
                            <p class="card-text">Para vender um produto basta ir até o menu do vendedor</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm" data-aos="fade-left">
                    <a href="#parceiro/como-cadastrar-meu-estabelecimento-no-vendomeulivro">
                        <img class="img-fluid" src="{{ 'img/vector/51.svg' }}" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">Como se tornar uma parceira?</h5>
                            <p class="card-text">Basta preencher um formulário e aguardar a aprovação</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm" data-aos="fade-left">
                    <a href="#parceiro/cadastre-se-como-empresa">
                        <img class="img-fluid" src="{{ 'img/vector/21404.jpg' }}" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">Cadastre-se como empresa</h5>
                            <p class="card-text">Para ter uma conta empresarial basta fazer uma solicitação</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="suporte-canais infoboxes">
    <div class="container pt-5 hero">
        <div class="row align-items-center text-center text-md-left">
            <div class="col-lg-12 text-center mb-4" data-aos="zoom-in">
                <h2 class="mb-3 section-subtitle">Outras formas de conseguir ajuda!</h2>
                <p>Se você chegou até aqui e ainda está com dúvida você pode estar falando diretamente com um dos nossos atendentes que estarão prontos para lhe ajudar.
                <br>Horário de atendimento <b>24h por dia</b>, todos os dias da semana, incluindo feriados nacionais.</p>
                <div class="line-shape"></div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm" data-aos="flip-left">
                    <a target="_blank" href="https://wa.me/557998973746?text=Olá estou com uma dúvida sobre a vendo meu livro:">
                        <img class="img-fluid" src="{{ 'img/vector/410196-PD78Y7-486.jpg' }}" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fale via WhatsApp</h5>
                            <p class="card-text">Nossa assistente virtual vai te ajudar a resolver suas dúvidas.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm" data-aos="flip-left">
                    <a href="tel:7998973746">
                        <img class="img-fluid" src="{{ 'img/vector/2427279.jpg' }}" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">Atendimento por telefone</h5>
                            <p class="card-text"><br>Ligue para o nosso número (79) 9897-3746</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm" data-aos="flip-left">
                    <a target="_blank" href="https://www.instagram.com/vendomeulivro_oficial/">
                        <img class="img-fluid" src="{{ 'img/vector/2232331.jpg' }}" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">Atendimento pelo instagram</h5>
                            <p class="card-text">Tire todas as suas dúvidas com um dos nossos funcionários pelo Instagram.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="list-info">
    <div class="container">
        <div class="row">
            @foreach ($duvidas as $duvida)
            <div class="col-xl-12">
                <div class="text-center mt-4 mb-4">
                    <h2 class="section-subtitle">{{ $duvida['title'] }}</h2>
                    <div class="line-shape"></div>
                </div>
                <div id="accordion_{{ $duvida['id'] }}" class="accordion accordion-area">
                    @foreach ($duvida['items'] as $item)
                    <div class="card pl-4">
                        <div id="heading_{{ $duvida['id'] }}_{{ $item['id'] }}" class="card-header">
                            <button type="button" data-toggle="collapse" data-target="#collapse_{{ $duvida['id'] }}_{{ $item['id'] }}" aria-expanded="false" aria-controls="collapse_{{ $duvida['id'] }}_{{ $item['id'] }}" class="card-link collapsed">
                                <h4 class="panel-title">
                                    {{ $item['title'] }}
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4a.5.5 0 0 0-1 0v3.5H4a.5.5 0 0 0 0 1h3.5V12a.5.5 0 0 0 1 0V8.5H12a.5.5 0 0 0 0-1H8.5V4z"/>
                                    </svg>
                                </h4>
                            </button>
                        </div>
                        <div id="collapse_{{ $duvida['id'] }}_{{ $item['id'] }}" aria-labelledby="heading_{{ $duvida['id'] }}_{{ $item['id'] }}" data-parent="#accordion_{{ $duvida['id'] }}" class="collapse">
                            <div class="card-body">{{ $item['body'] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('content-top')
<script src="{{ url('/js/pages/index.js') }}"></script>
@endsection
