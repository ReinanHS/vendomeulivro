@extends('layouts.app')
@section('content')


<section class="product-section mb-4">
    <div class="container mt-4">
        <div class="back-link">
            <a href="./category.html"> &lt;&lt; Voltar aos resultados</a>
        </div>
        <div class="row mt-4 product-box">
            <product-image src-image="https://i.pinimg.com/originals/d8/16/c4/d816c439000eea434f997ff7cedebc42.jpg" alt-image="White peplum top"></product-image>
            <div class="col-lg-7 col-sm-12 mt-4 mt-xl-0 product-details">
                <h2 class="p-title">White peplum top</h2>
                <p class="book-author">
                    Autor <a href="#">Regina Porter</a>
                </p>
                <p class="book-publishing">
                    Editora: <a href="#">Faro Editorial</a>
                </p>
                <div class="d-flex">
                    <div class="section-price">
                        <h3 class="p-price">R$39,90</h3>
                        <h4 class="p-stock">Disponível: <span>Amazon</span></h4>
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
                                Quando Coraline entra por uma porta para encontrar outra casa estranhamente semelhante à dela (apenas melhor), as coisas parecem maravilhosas. Mas há outra mãe lá, e outro pai, e eles querem que ela fique e seja sua filhinha. Eles querem mudá-la e nunca deixá-la ir.
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
                            <span>Seja foda!</span>
                        </li>
                        <li class="list-item">
                            <strong>Autor</strong>
                            <span>Caio Carneiro</span>
                        </li>
                        <li class="list-item">
                            <strong>Idioma</strong>
                            <span>Português</span>
                        </li>
                        <li class="list-item">
                            <strong>Editora</strong>
                            <span>Buzz</span>
                        </li>
                        <li class="list-item">
                            <strong>Formato</strong>
                            <span>Papel</span>
                        </li>
                        <li class="list-item">
                            <strong>Tipo de narração</strong>
                            <span>Negócios</span>
                        </li>
                        <li class="list-item">
                            <strong>ISBN</strong>
                            <span>9788593156298</span>
                        </li>
                        <li class="list-item">
                            <strong>Ano de publicação</strong>
                            <span>2019</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 mt-4 product-info">
                <div class="container">
                    <h2 class="title mb-4">Descrição</h2>
                    <div class="item-description-text">
                        <p>Titulo : Seja foda!<br>Autor : Caio Carneiro <br><br>Sinopse<br>Aposto que você quer, no final da sua vida, olhar para trás, bater no peito com o coração cheio de felicidade, sem falsa modéstia, com plena convicção e serenidade, e dizer: minha vida foi FODA. <br>Mas calma, encontrar este livro é só o começo. <br>Agora, você precisa levá-lo com você. <br>Com ele, você vai aprender comportamentos e atitudes necessários para conquistar, em todos os aspectos da sua vida, resultados incríveis. <br>Ele vai provocar e inspirar você não só a ter o espírito elevado e sonhar com coisas inimagináveis, mas também se tornar consciente do que precisa fazer para realizar cada um desses sonhos. <br>Vamos juntos?<br><br>Editora Buzz<br>1ª edição 2017<br>192 páginas<br>Formato 16 x 23<br>ISBN 9788593156298</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 product-info">
                <product-rating></product-rating>
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
                    <pergunta-vendedor></pergunta-vendedor>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        @include('components.book-slide', ['title' => 'Quem viu este produto também comprou'])
        @include('components.book-slide', ['title' => 'Produtos patrocinados'])
        @include('components.book-slide', ['title' => 'Mais Populares'])
    </div>
</section>
<modal-avaliacao></modal-avaliacao>
@endsection
