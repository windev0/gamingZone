@extends('layout')

@section('main')
    <main class="main">
        <h1 class="text-center mt-3 mb-3">Accessoires de PC</h1>
        @for ($i = 0; $i < 2; $i++)
            @include('myhome/main/card')
        @endfor
        <h1 class="text-center mt-3 mb-3">Accessoires de jeu</h1>
        @for ($i = 0; $i < 3; $i++)
            @include('myhome/main/card')
        @endfor
        <h1 class="text-center mt-3 mb-3">Téléphones</h1>
        @for ($i = 0; $i < 1; $i++)
            @include('myhome/main/card')
        @endfor

    </main>
@endsection
