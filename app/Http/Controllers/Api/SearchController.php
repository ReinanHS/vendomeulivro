<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Api\GoogleBooksController;

class SearchController extends Controller
{

    public function busca($q){
        return view('pages.busca', [
            'url' => Str::slug($q, '-')
        ]);
    }

    public function getBusca($q){
        $google = new GoogleBooksController();
        $data = $google->formatData($google->search($q));

        return response()->json($data);
    }
}
