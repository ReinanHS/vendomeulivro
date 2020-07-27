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
}
