@extends('layouts.app')

@section('title', 'Mi Horóscopo')

@section('content')
<div class="container">
    <h1>Mi Horóscopo</h1>

    @if($chineseHoroscope)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Horóscopo Chino: {{ $chineseHoroscope->animal }}</h5>
            <p class="card-text">{{ $chineseHoroscope->prediction }}</p>
        </div>
    </div>
    @endif

    @if($zodiacHoroscope)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Horóscopo Zodiacal: {{ $zodiacHoroscope->sign }}</h5>
            <p class="card-text">{{ $zodiacHoroscope->prediction }}</p>
        </div>
    </div>
    @endif

    @if($numerologyPrediction)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Numerología: Número de la vida {{ $numerologyPrediction->life_path_number }}</h5>
            <p class="card-text">{{ $numerologyPrediction->prediction }}</p>
        </div>
    </div>
    @endif
</div>
@endsection
