@extends('layouts.app', ['seo' => $seo])
@section('content')
    @include('components.carousels-book', ['carousels' => $carousels])
    @include('components.book-slide', ['background' => '#efefef', 'title' => 'Os mais vendidos'])
@endsection
