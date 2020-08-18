@extends('layouts.app', ['seo' => $seo])
@section('content')
    {{--  @include('components.carousels-book', ['carousels' => $carousels])

    @forelse ($categorias as $item)
        @include('components.book-slide', ['background' => '#efefef', 'title' => $item['title'], 'item' => $item])
    @empty
        <h3 class="mt-4">Nenhuma categoria foi encontrada</h3>
    @endforelse  --}}

@endsection
