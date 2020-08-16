<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class GoogleBooksController extends Controller
{
     /**
     * Função para pegar os dados usando o curl.
     *
     * @param string $url
     * @return Array
    */
    public function getHttp(string $url){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
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
        $livros = json_decode($response);

        curl_close($curl);

        return $livros ?? [];
    }

    /**
     * Função para pegar os dados do google livros.
     *
     * @param string $q
     * @return Array
    */
    public function search($q){
        $googleSearch = 'https://www.googleapis.com/books/v1/volumes?q=';
        $url = $googleSearch . urlencode ($q);

        return $this->getHttp($url);
    }

    /**
     * Função para pegar sugestões de livros.
     *
     * @param string $q
     * @return json
    */
    public function getSuggest($q){
        $livros = $this->search($q);
        $result = [];

        if(isset($livros->items)){

            foreach($livros->items as $item){
                $result[] = $item->volumeInfo->title;
            }
        }

        return response()->json($result);
    }

    /**
     * Função para formatar os dados para o formato da nossa API.
     *
     * @param string $data
     * @return json
    */
    public function formatData($data){
        $result = [];

        if(isset($data->items)){

            foreach($data->items as $livro){
                $url = $livro->volumeInfo->title ?? 'livro-desconhecido';
                $url = Str::slug($url);
                $url = $url . '-' . $livro->id;
                $url = url($url.'/p');

                $result[] = [
                    'id' => $livro->id,
                    'title' => $livro->volumeInfo->title ?? 'Título desconhecido',
                    'subtitle' => $livro->volumeInfo->subtitle ?? 'Um dos melhores livros já escrito',
                    'image' => $livro->volumeInfo->imageLinks->thumbnail ?? 'https://image.freepik.com/vetores-gratis/modelo-de-vetor-de-capa-de-livro-branco-vertical-em-branco_53562-2189.jpg',
                    'price' => random_int(1, 20).','.random_int(50, 99),
                    'link' => $url,
                ];
            }
        }

        return $result;
    }

    /**
     * Função para pegar um livro pelo seu id.
     *
     * @param string $id
     * @return json
    */
    public function findBook($id){
        $livro = $this->getHttp('https://www.googleapis.com/books/v1/volumes/'.$id);

        if(isset($livro->error->code) == 404){
            return response()->json([
                'status' => 404,
            ], 404);
        }

        $url = $livro->volumeInfo->title ?? 'livro-desconhecido';
        $url = Str::slug($url);
        $url = $url . '-' . $livro->id;
        $url = url($url.'/p');

        return [
            'id' => $livro->id,
            'title' => $livro->volumeInfo->title ?? 'Título desconhecido',
            'subtitle' => $livro->volumeInfo->subtitle ?? 'Um dos melhores livros já escrito',
            'image' => $livro->volumeInfo->imageLinks->thumbnail ?? '',
            'price' => random_int(1, 20).','.random_int(50, 99),
            'description' => $livro->volumeInfo->description ?? '',
            'link' => $url,
            'book' => [
                'authors' => $livro->volumeInfo->authors ?? [],
                'publisher' => $livro->volumeInfo->publisher ?? 'desconhecido',
                'publishedDate' => $livro->volumeInfo->publishedDate ?? 'desconhecido',
                'pageCount' => $livro->volumeInfo->pageCount ?? 'desconhecido',
                'language' => $livro->volumeInfo->language ?? 'pt-BR',
                'type' => $livro->volumeInfo->printType,
                'narration' => 'desconhecido',
                'isbn' => random_int(1000000000000, 9000000000000),
            ]
        ];
    }

    /**
     * Média de avaliação sbore um produto
     *
     * @param int $id
     * @var response
     */
    public function getProductRating($id){

        return response()->json([
            'media' => random_int(1, 5).'.'.random_int(1, 9),
            'total' => random_int(10, 900),
        ]);

    }

    /**
     * Avaliação sbore um produto
     *
     * @param int $id
     * @var response
     */
    public function fakeAvaliacao($id){
        $data = [];
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 30; $i++) {
            $data[] = [
                'user' => [
                    'name' => $faker->name,
                    'image' => 'https://lorempixel.com/96/96/people/',
                ],
                'created_at' => '2014-06-26 04:07:31',
                'title' => $faker->text,
                'content' => $faker->paragraphs(random_int(2,4), true),
                'rating' => random_int(1, 5),
            ];
        }


        return response()->json($this->paginate($data));

    }

    public function fakePergunta($id){
        $data = [];
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 30; $i++) {
            $data[] = [
                'id' => random_int(1, 9000),
                'content' => $faker->text,
                'resposta' => $faker->paragraphs(random_int(1,3), true),
            ];
        }


        return response()->json($this->paginate($data));

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
