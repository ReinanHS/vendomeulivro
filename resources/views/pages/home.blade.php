@extends('layouts.app', ['seo' => $seo])
@section('content')
    @include('components.carousels-book', ['carousels' => $carousels])
    <h1>{{ $name ?? '' }}</h1><br><br>
    @include('components.book-slide')
@endsection
