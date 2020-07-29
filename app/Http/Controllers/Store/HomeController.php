<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('pages.home', [
            'seo' => $this->getSEO(),
            'carousels' => $this->getCarousel(),
        ]);
    }

    public function getSEO(){
        return [
            'title' => 'Compare preços de livros e melhores ofertas e descontos',
            'description' => 'No vendomeulivro.com você encontra as melhores ofertas de Livros. Encontre o menor preço nas melhores lojas!',
            'keywords' => [
                'vendomeulivro',
                'reviews de produto',
                'comparador de preços',
                'compras',
                'comparar preços de livros',
                'compare preços'
            ],
            'product' => [
                'image' => [
                    "https://example.com/photos/1x1/photo.jpg",
                    "https://example.com/photos/4x3/photo.jpg",
                    "https://example.com/photos/16x9/photo.jpg"
                ],
                'id' => 10615318,
                'editora' => 'Editora Brasil',
                'offers' => [
                    'lowPrice' => 10.50,
                    'highPrice' => 18.99,
                ],
                'review' => [
                    'rating' => 3,
                    'name' => 'Reinan Gabriel',
                    'headline' => 'Bem legal',
                    'body' => 'Chegue logo, Emocionante. Final incrível. História envolvente. O melhor do autor. Personagens memoráveis.',
                    'date' => '2020-05-26'
                ],
            ],
        ];
    }


    public function getCarousel(){
        return [
            0 => [
                'title' => 'A Sutil Arte De Ligar O Foda-Se',
                'description' => 'Chega de tentar buscar um sucesso que só existe na sua cabeça. Chega de se torturar para pensar positivo enquanto sua vida vai ladeira abaixo. Chega de se sentir inferior por não ver o lado bom de estar no fundo do poço.',
                'image' => url('/img/livros/carousel/a-sutil-arte-de-ligar-o-foda-se-capa.png'),
                'link' => '#1',
                'link-title' => 'resenha',
                'link-store' => '#store',
                'background' => 'linear-gradient(to top, rgb(51, 134, 206) 0%, rgb(52, 177, 184) 100%)',
            ],
            1 => [
                'title' => 'A Garota do Lago',
                'description' => 'Summit Lake, uma pequena cidade entre montanhas, é esse tipo de lugar, bucólico e com encantadoras casas dispostas à beira de um longo trecho de água intocada. Duas semanas atrás, a estudante de direito Becca Eckersley foi brutalmente assassinada em uma dessas casas.',
                'image' => url('/img/livros/carousel/a-garota-do-lago.png'),
                'link' => '#1',
                'link-title' => 'resenha',
                'link-store' => '#store',
                'background' => 'url(https://cinesiageek.com.br/wp-content/uploads/2018/10/bpzo-square-orig-e1539963117187.jpg)',
            ],
            2 => [
                'title' => 'Uma Mulher na Escuridão',
                'description' => 'Ao limpar o escritório de seu pai, falecido há uma semana, a investigadora forense Rory encontra pistas e documentos ocultados da justiça que a fazem mergulhar num caso sem solução ocorrido 40 anos atrás. No verão de 1979, cinco mulheres de Chicago desapareceram.',
                'image' => url('/img/livros/carousel/uma-mulher-na-escuridão-capa.png'),
                'link' => '#1',
                'link-title' => 'resenha',
                'link-store' => '#store',
                'background' => 'url(https://images4.alphacoders.com/349/34904.jpg)',
                'background-size' => 'cover',
            ],
        ];
    }
}
