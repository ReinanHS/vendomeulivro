@extends('layouts.app', ['seo' => $seo])
@section('content')
    @include('components.carousels-book')
    <h1>{{ $name ?? '' }}</h1>
@endsection
