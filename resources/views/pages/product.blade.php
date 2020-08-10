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
                <div class="container resenhas-box">
                    <h2 class="title mb-4">Opiniões sobre o produto</h2>
                    <div class="average-rating">
                        <div class="section-rating d-flex">
                            <div>
                                <h3 class="p-price text-center">4.5</h3>
                                <h4>
                                    <span aria-hidden="true" style="background: rgba(0, 0, 0, 0) linear-gradient(to right, rgb(255, 204, 51) 92.4%, rgb(204, 204, 204) 70%) repeat scroll 0% 0% padding-box text;">★★★★★</span>
                                </h4>
                            </div>
                            <div class="ml-4">
                                <p>Média entre 2 opiniões</p>
                                <button type="button" class="btn btn-outline-primary">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                    Escrever uma avaliação
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="review-listing mt-4">
                        @for ($i = 0; $i < 5; $i++)
                        <article class="card-review d-flex mb-4">
                            <div class="card-user-photo">
                                <img src="https://lh3.googleusercontent.com/a-/AOh14GhweaRz3NjqTbhF5cdNvFJOMQxnRY9fnSCY4wZtUg=w48-h48-n" aria-hidden="true">
                            </div>
                            <div class="card-box">
                                <div class="card-top">
                                    <div class="user-name">
                                        <span>Edna Valim</span>
                                        <div class="user-rating">
                                            <span aria-hidden="true" style="background: rgba(0, 0, 0, 0) linear-gradient(to right, rgb(255, 204, 51) 92.4%, rgb(204, 204, 204) 70%) repeat scroll 0% 0% padding-box text;">★★★★★</span>
                                            <time>8 de agosto de 2020</time>
                                        </div>
                                        <div class="sub-title">
                                            <h3>Estou feliz otimista, determinada .</h3>
                                        </div>
                                    </div>
                                    <div class="votes">
                                        <div class="vote-up active">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                                            </svg>
                                        </div>
                                        <div class="stats-up">55</div>
                                        <div class="score">41</div>
                                        <div class="stats-down">14</div>
                                        <div class="vote-down">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="mt-4 d-block d-sm-none">Estou feliz otimista, determinada .</h3>
                                    <span>Desrespeito!!! O aplicativo apresenta um número de telefone para validação, no qual devo receber o código, só que nunca pertenceu a minha pessoa...nunca! E não tem como fazer alteração pelo aplicativo. O objetivo é que as pessoas não precisem se deslocar até uma agência, mas o que adianta??? Pede para eu ir até uma. Desrespeito, parece que fazem de propósito para dificultar o acesso ao dinheiro que é do cidadão!</span>
                                </div>
                            </div>
                        </article>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 product-info">
                <div class="container perguntas">
                    <h2 class="title mb-4">Perguntas e respostas</h2>
                    <p class="subtitle mt-4">Qual informação você precisa?</p>
                    <div class="d-flex">
                        <a href="#" class="btn btn-outline-primary ml-2 mt-3 mt-md-0">Custo e prazo de envio</a>
                        <a href="#" class="btn btn-outline-primary ml-2 mt-3 mt-md-0">Meios de pagamento</a>
                        <a href="#" class="btn btn-outline-primary ml-2 mt-3 mt-md-0">Garantia</a>
                        <a href="#" class="btn btn-outline-primary ml-2 mt-3 mt-md-0">Devoluções grátis</a>
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
@endsection
