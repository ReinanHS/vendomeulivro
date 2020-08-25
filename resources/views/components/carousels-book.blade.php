<div id="bookCarousel" style="margin-top: -1px;" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        @for ($i = 0; $i < sizeof($carousels); $i++)
        <div class="carousel-item @if($i == 0) active @endif d-flex justify-content-center align-self-center" @if(isset($carousels[$i]['background'])) style="background-image: {{ $carousels[$i]['background'] }}; @if(isset($carousels[$i]['background-size'])) background-size: {{ $carousels[$i]['background-size'] }};@endif"@endif>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-12 d-flex flex-wrap align-self-center">
                        <h4 class="text-md-left text-center">{{ $carousels[$i]['title'] }}</h4>
                        @isset($carousels[$i]['description'])
                            <p>{{ Str::limit($carousels[$i]['description'], 135, '...') }}</p>
                        @endisset

                        @isset($carousels[$i]['link'])
                            <a href="{{ $carousels[$i]['link'] }}">{{ $carousels[$i]['link-title'] ?? 'Mais informações' }}</a>
                        @endisset
                        <a href="{{ $carousels[$i]['link-store'] }}" class="btn btn-comprar">Quero este livro</a>
                    </div>
                    <div class="col-md-5 col-12 order-md-2 order-1 mask">
                        <img src="{{ $carousels[$i]['image'] }}" class="rounded mx-auto d-block" alt="slide {{ $i }}">
                    </div>
                </div>
            </div>
           {{--  <div class="mask flex-center">
           </div>  --}}
        </div>
        @endfor
    </div>
    <a class="carousel-control-prev" href="#bookCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#bookCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
 </div>
 <!--slide end-->
