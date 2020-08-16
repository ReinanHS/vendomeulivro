<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\GoogleBooksController;

class DebugController extends Controller
{
    public function product($slug){
        $id = explode('-', $slug);
        $id = $id[sizeof($id) - 1];

        $google = new GoogleBooksController();
        $data = $google->findBook($id);

        // dd($data);

        return view('pages.product', ['data' => $data, 'seo' => $this->getSEO($data)]);
    }

    public function getSEO($data){
        return [
            'title' => $data['title'],
            'description' => Str::limit($data['description'], 120, '...'),
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
                    $data['image'],
                ],
                'id' => $data['id'],
                'editora' => $data['book']['publisher'],
                'offers' => [
                    'lowPrice' => 4.8,
                    'highPrice' => $data['price'],
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

    public function findProduct($id){
        $google = new GoogleBooksController();
        $data = $google->findBook($id);


        return response()->json($data);
    }

    public function category($title){
        $google = new GoogleBooksController();
        $data = $google->formatData($google->search($title));


        return response()->json($data);
    }
}
