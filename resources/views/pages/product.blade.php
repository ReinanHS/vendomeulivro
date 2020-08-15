@extends('layouts.app')
@section('content')


<section class="product-section mb-4">
    <div class="container mt-4">
        <div class="back-link">
            <a href="./category.html"> &lt;&lt; Voltar aos resultados</a>
        </div>
        <div class="row mt-4 product-box">
            <div class="col-lg-5 col-sm-12 mb-xl-0 mb-4 d-flex justify-content-center">
                <div class="product-pic">
                    <img class="product-img" src="https://i.pinimg.com/originals/d8/16/c4/d816c439000eea434f997ff7cedebc42.jpg" alt="">
                </div>
                <div class="product-share">
                    <div class="btn-like">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                    </div>
                    <div class="btn-share">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-share-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.024 3.797L4.499 7.56l-.448-.895 7.525-3.762.448.894zm-.448 9.3L4.051 9.335 4.5 8.44l7.525 3.763-.448.894z"/>
                            <path fill-rule="evenodd" d="M13.5 5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm-11-5.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                    </div>
                </div>
            </div>
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
                    <form class="form-inline">
                        <div class="form-group">
                            <textarea class="form-control" rows="1" name="question" placeholder="Escreva uma pergunta..." title="Escreva uma pergunta..." maxlength="1500" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Perguntar</button>
                    </form>
                    <div class="questions-asked">
                        <p class="subtitle mt-4 mb-4">Últimas perguntas </p>
                        @for ($i = 0; $i < 10; $i++)
                        <article class="question-box mb-4">
                            <div class="question d-flex">
                                <div class="question-icon mr-3 text-secondary">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-left-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    </svg>
                                </div>
                                <div class="question-text d-flex">
                                    <p class="text-muted">Vcs tem o outro do Caio Carneiro pra mim comprar os dois</p>
                                    <a class="questions-denounce ml-2" href="#">Denunciar</a>
                                </div>
                            </div>
                            <div class="answer d-flex">
                                <div class="question-icon mr-3 text-secondary">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-right-dots-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                </div>
                                <div class="question-text d-flex">
                                    <p class="font-weight-lighter">Bom dia nossa postagem e imediata, favor conferir no seu login.</p>
                                    <a class="questions-denounce ml-2" href="#">Denunciar</a>
                                </div>
                            </div>
                        </article>
                        @endfor
                    </div>
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
