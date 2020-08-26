@extends('layouts.app')

@section('content')
<search-component q="{{ str_replace('-', ' ', $url) }}"></search-component>
@endsection

@section('content-top')
<script>history.pushState({}, null, '{{ $url }}')</script>
@endsection
