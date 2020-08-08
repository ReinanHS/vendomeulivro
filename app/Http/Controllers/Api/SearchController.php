<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function suggestqueries($q = ''){

        $googleSearch = 'https://www.googleapis.com/books/v1/volumes?q=';
        $search = urlencode ($q);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $googleSearch.$search,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_HEADER => false,
		    CURLOPT_NOBODY => false,
		    CURLOPT_SSL_VERIFYHOST => 0,
		    CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7",
            CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_SSL_VERIFYPEER => 0,
		    CURLOPT_FOLLOWLOCATION => 0,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);
        $livros = \json_decode($response);

        curl_close($curl);

        $result = [];

        if($response && isset($livros->items)){

            foreach($livros->items as $item){
                $result[] = $item->volumeInfo->title;
            }
        }

        return response()->json($result);
    }

    public function busca($q = ''){
        $googleSearch = 'https://www.googleapis.com/books/v1/volumes?q=';
        $search = urlencode ($q);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $googleSearch.$search,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_HEADER => false,
		    CURLOPT_NOBODY => false,
		    CURLOPT_SSL_VERIFYHOST => 0,
		    CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7",
            CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_SSL_VERIFYPEER => 0,
		    CURLOPT_FOLLOWLOCATION => 0,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);
        $livros = \json_decode($response);

        curl_close($curl);

        $result = isset($livros->items) ? $livros->items : [];

        return response()->json($result);
    }

    public function teste($id){
        // sleep(3);
        return response()->json([
            0 => [
                'id' => 1,
                'title' => 'Como criar um site',
                'image' => url('img/livros/carousel/a-garota-do-lago.png'),
                'link' => 'como-criar-um-site-0/p',
                'author' => [
                    'name' => 'Reinan Gabriel',
                    'slug' => 'reinan-gabriel',
                ],
                'price' => 1.99,
            ],
            1 => [
                'id' => 2,
                'title' => 'Sem medo de vencer: O principal fator',
                'image' => url('img/livros/carousel/a-garota-do-lago.png'),
                'link' => 'como-criar-um-site-0/p',
                'author' => [
                    'name' => 'Reinan Gabriel',
                    'slug' => 'reinan-gabriel',
                ],
                'price' => 1.99,
            ],
            2 => [
                'id' => 3,
                'title' => 'SCRUM: A arte de fazer o dobro',
                'image' => url('img/livros/carousel/a-garota-do-lago.png'),
                'link' => 'como-criar-um-site-0/p',
                'author' => [
                    'name' => 'Reinan Gabriel',
                    'slug' => 'reinan-gabriel',
                ],
                'price' => 1.99,
            ],
            3 => [
                'id' => 4,
                'title' => 'Ansiedade 3. Ciúme',
                'image' => url('img/livros/carousel/a-garota-do-lago.png'),
                'link' => 'como-criar-um-site-0/p',
                'author' => [
                    'name' => 'Reinan Gabriel',
                    'slug' => 'reinan-gabriel',
                ],
                'price' => 1.99,
            ],
            4 => [
                'id' => 5,
                'title' => 'Diário de um Banana 14: Quebra tudo',
                'image' => url('img/livros/carousel/a-garota-do-lago.png'),
                'link' => 'como-criar-um-site-0/p',
                'author' => [
                    'name' => 'Reinan Gabriel',
                    'slug' => 'reinan-gabriel',
                ],
                'price' => 1.99,
            ],
            5 => [
                'id' => 6,
                'title' => 'A Boa Sorte',
                'image' => url('img/livros/carousel/a-garota-do-lago.png'),
                'link' => 'como-criar-um-site-0/p',
                'author' => [
                    'name' => 'Reinan Gabriel',
                    'slug' => 'reinan-gabriel',
                ],
                'price' => 1.99,
            ],
            6 => [
                'id' => 7,
                'title' => 'ANSIEDADE: COMO ENFRENTAR O MAL DO SÉCULO',
                'image' => url('img/livros/carousel/a-garota-do-lago.png'),
                'link' => 'como-criar-um-site-0/p',
                'author' => [
                    'name' => 'Reinan Gabriel',
                    'slug' => 'reinan-gabriel',
                ],
                'price' => 1.99,
            ],
            7 => [
                'id' => 8,
                'title' => 'Como lidar com pessoas manipuladoras',
                'image' => url('img/livros/carousel/a-garota-do-lago.png'),
                'link' => 'como-criar-um-site-0/p',
                'author' => [
                    'name' => 'Reinan Gabriel',
                    'slug' => 'reinan-gabriel',
                ],
                'price' => 1.99,
            ],
            8 => [
                'id' => 9,
                'title' => 'Pai Rico, Pai Pobre - Edição de 20 anos',
                'image' => url('img/livros/carousel/a-garota-do-lago.png'),
                'link' => 'como-criar-um-site-0/p',
                'author' => [
                    'name' => 'Reinan Gabriel',
                    'slug' => 'reinan-gabriel',
                ],
                'price' => 1.99,
            ],
            9 => [
                'id' => 10,
                'title' => 'O Livro De Enoque',
                'image' => url('img/livros/carousel/a-garota-do-lago.png'),
                'link' => 'como-criar-um-site-0/p',
                'author' => [
                    'name' => 'Reinan Gabriel',
                    'slug' => 'reinan-gabriel',
                ],
                'price' => 1.99,
            ],
            10 => [
                'id' => 11,
                'title' => 'Seja foda!',
                'image' => url('img/livros/carousel/a-garota-do-lago.png'),
                'link' => 'como-criar-um-site-0/p',
                'author' => [
                    'name' => 'Reinan Gabriel',
                    'slug' => 'reinan-gabriel',
                ],
                'price' => 1.99,
            ],
            11 => [
                'id' => 12,
                'title' => 'A Cabana',
                'image' => url('img/livros/carousel/a-garota-do-lago.png'),
                'link' => 'como-criar-um-site-0/p',
                'author' => [
                    'name' => 'Reinan Gabriel',
                    'slug' => 'reinan-gabriel',
                ],
                'price' => 1.99,
            ],
        ]);

    }

    public function find($id){
        return response()->json([
            'id' => 1,
            'title' => 'Como criar um site',
            'summary' => 'No vendomeulivro.com você encontra as melhores ofertas de Livros. Encontre o menor preço nas melhores lojas!',
            'image' => url('img/livros/carousel/a-garota-do-lago.png'),
            'link' => url('como-criar-um-site-0/p'),
            'author' => [
                'name' => 'Reinan Gabriel',
                'slug' => 'reinan-gabriel',
            ],
            'price' => 1.99,
        ]);

    }
}
