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
        </div>
    </div>
</section>
@endsection
