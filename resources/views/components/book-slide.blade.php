<section class="book-list">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <a href="#" class="book-title">
                    <h2>Os mais vendidos</h2>
                </a>
            </div>
            <div class="col-md-3 d-flex justify-content-end">
                <a href="#" class="btn btn-veja-mais">Veja mais</a>
            </div>
            <div class="col-12">
                <div class="row">
                    @for ($i = 0; $i < (12/2); $i++)
                    <div class="col-sm-12 col-md-4 col-lg-2">
                        <div class="card">
                            <div class="card-capa d-flex justify-content-center">
                                <div class="card-img-effect"></div>
                                <div class="card-img-load card-load-item">
                                    <img class="card-img-top" src="https://livrariaconcreta.com.br/wp-content/uploads/2017/01/livro-vermelho_andrew-lang_CAPA_FINAL_CURVAS-01.jpg" alt="...">
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-title">
                                    <div class="title-limit">
                                        Mitologia Nórdica
                                    </div>
                                </a>
                                <a href="#" class="card-subtitle mb-2 text-muted">
                                    <div class="subtitle-limit">
                                        Neil Gaiman
                                    </div>
                                </a>
                                <div class="d-flex align-items-end">
                                    <div class="stars" style="background: rgba(0, 0, 0, 0) linear-gradient(to right, #737373 89.6%, rgb(204, 204, 204) 70%) repeat scroll 0% 0% padding-box text;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                    <a href="#" class="card-link">R$ 12,80</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
<br><br><br><br>
