@extends('layouts.app')

@section('content')
<search-box q="{{ str_replace('-', ' ', $url) }}"></search-box>
@endsection

@section('content-top')
<script>history.pushState({}, null, '{{ $url }}')</script>
@endsection
