@extends('layouts.app', ['seo' => $seo])
@section('content')
    @include('components.carousels-book', ['carousels' => $carousels])
    <h1>{{ $name ?? '' }}</h1>
@endsection
