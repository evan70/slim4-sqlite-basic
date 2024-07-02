@extends('layouts.error')

@section('content')
    <div class="content">
        <h1 class="text-center mt-0">Chyba {{ $code }}</h1>
        @if($code == 404)
            <p class="text-center">Ups ... stránka nenájdená</p>
        @endif
        <p class="text-center">
            <a href="/">Domov</a>
        </p>
        @if($htmlException)
            {!! $htmlException !!}
        @endif
    </div>
@endsection
