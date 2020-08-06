<section class="book-list pt-4" style="background: #efefef;">
    <div class="container-fluid">
        <div class="container mb-2">
            <div class="row">
                <div class="col-12 col-md-9 d-flex justify-content-md-start justify-content-center">
                    <a href="#" class="book-title">
                        <h2>Os mais vendidos</h2>
                    </a>
                </div>
                <div class="col-12 col-md-3 d-flex justify-content-end justify-content-center">
                    <a href="#" class="btn btn-veja-mais">Veja mais</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <category-list>
                @for ($i = 0; $i < 4; $i++)
                <div class="carousel-cell">
                    <div class="card-container">
                        <div class="card-top placeholdershimmer">
                        <div class="card-image">
                            <a href="#">
                                <img src="{{ url('img/livros/carousel/a-garota-do-lago.png') }}" alt="Capa do livro">
                                <div class="card-image-effect"></div>
                            </a>
                        </div>
                        <book-card-action-btn :book="{like: false, id: {{ $i }}, code: '{{ $i }}'}"/>
                        </div>
                        <div class="card-body">
                            <a class="card-title" href="#">
                                <div class="title" title="A Garota do Lago - Livro 1">
                                    <p>A Garota do Lago - Livro 1</p>
                                </div>
                            </a>
                            <a class="card-author" href="#">
                                <div class="author" title="Author Marcio Ardenghe D. Peres">
                                    <span>Marcio Ardenghe D. Peres</span>
                                </div>
                            </a>
                        </div>
                        <div class="card-button">
                        <div class="rating-section">
                            <div class="stars-rating">
                                <div class="stars"></div>
                            </div>
                            <div class="card-price">
                            <a href="#">R$ 70,99</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                @endfor
            </category-list>
        </div>
    </div>
</section>
<br><br><br><br>
