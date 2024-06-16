@extends('layouts.app')

@section('title', 'Sobre Nosotros')

@section('content')
<div class="container">
    <h1>Sobre Nosotros</h1>
    <p>Este proyecto trata sobre la exploración y el análisis de los diferentes tipos de horóscopos y numerología. Nuestro objetivo es proporcionar información precisa y personalizada basada en la astrología y el análisis numerológico.</p>

    <h2>Misión</h2>
    <p>Nuestra misión es ofrecer a nuestros usuarios una comprensión más profunda de sí mismos y de su entorno a través de la astrología y la numerología. Queremos ayudar a las personas a tomar decisiones informadas y a encontrar equilibrio en sus vidas.</p>

    <h2>Visión</h2>
    <p>Visualizamos un mundo donde las personas utilizan la sabiduría ancestral de la astrología y la numerología para mejorar su bienestar personal y sus relaciones. Nos esforzamos por ser líderes en el campo de la astrología digital y la numerología.</p>

    <h2>Equipo</h2>
    <p>Somos un equipo dedicado de astrólogos, numerólogos y desarrolladores apasionados por ofrecer el mejor contenido y herramientas a nuestros usuarios. Nos esforzamos por mantenernos actualizados con las últimas investigaciones y prácticas en nuestro campo.</p>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('team1.jpg') }}" class="card-img-top" alt="Equipo 1">
                <div class="card-body">
                    <h5 class="card-title">Lucía Pérez</h5>
                    <p class="card-text">Astrólogo con más de 20 años de experiencia en el campo de la astrología occidental y china.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('team2.jpg') }}" class="card-img-top" alt="Equipo 2">
                <div class="card-body">
                    <h5 class="card-title">Julian García</h5>
                    <p class="card-text">Numeróloga experta en el análisis de patrones numéricos y su impacto en la vida cotidiana.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('team3.jpg') }}" class="card-img-top" alt="Equipo 3">
                <div class="card-body">
                    <h5 class="card-title">Carlos Martínez</h5>
                    <p class="card-text">Desarrollador líder encargado de la implementación de las herramientas digitales de nuestra plataforma.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
