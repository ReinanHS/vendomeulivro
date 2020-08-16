<section class="book-list pt-4" style="background: {{ $background ?? 'initial' }};">
    <div class="container-fluid">
        <div class="container mb-2">
            <div class="row">
                <div class="col-12 col-md-9 d-flex justify-content-md-start justify-content-center">
                    <a href="#" class="book-title">
                        <h2>{{ $title ?? 'Listagem dos produtos' }}</h2>
                    </a>
                </div>
                <div class="col-12 col-md-3 d-flex justify-content-end justify-content-center">
                    <a href="#" class="btn btn-veja-mais">Veja mais</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <category-list :carousel-id="'{{ $item['id'] }}'">
                @isset($item['items'])
                    @foreach ($item['items'] as $livro)
                    <div class="carousel-cell">
                        <div class="card-container">
                            <div class="card-top placeholdershimmer">
                                <div class="card-image">
                                    <a href="{{ $livro['link'] }}">
                                        <img src="{{ $livro['image'] }}" alt="Capa do livro {{ $livro['title'] }}">
                                        <div class="card-image-effect"></div>
                                    </a>
                                </div>
                                <book-card-action-btn :book="{like: false, id: {{ $livro['id'] }}, code: '{{ $livro['id'] }}'}"></book-card-action-btn>
                            </div>
                            <div class="card-body">
                                <a class="card-title" href="{{ $livro['link'] }}">
                                    <div class="title" title="{{ $livro['title'] }}">
                                        <p>{{  $livro['title'] }}</p>
                                        <div class="text-effect"></div>
                                    </div>
                                </a>
                                <a class="card-author" href="{{ $livro['link'] }}">
                                    <div class="author" title="{{ $livro['subtitle'] }}">
                                        <span>{{ $livro['subtitle'] }}</span>
                                        <div class="text-effect"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-button">
                            <div class="rating-section">
                                <div class="stars-rating">
                                    <div class="stars"></div>
                                </div>
                                <div class="card-price">
                                    <a href="{{ $livro['link'] }}">R$ {{ $livro['price'] }}</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endisset
            </category-list>
        </div>
    </div>
</section>
