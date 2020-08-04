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
                                <img src="{{ url('img/livros/carousel/a-garota-do-lago.png') }}">
                                <div class="card-image-effect"></div>
                            </a>
                        </div>
                        <div class="card-top-icons">
                            <div class="card-icon-love">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg>
                            </div>
                            <div class="card-icon-cart">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
                                </svg>
                            </div>
                            <div class="card-icon-share">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-share-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.024 3.797L4.499 7.56l-.448-.895 7.525-3.762.448.894zm-.448 9.3L4.051 9.335 4.5 8.44l7.525 3.763-.448.894z"/>
                                    <path fill-rule="evenodd" d="M13.5 5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm-11-5.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                </svg>
                            </div>
                        </div>
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
