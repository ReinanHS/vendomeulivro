<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('pages.home', [
            'seo' => $this->getSEO(),
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
}
