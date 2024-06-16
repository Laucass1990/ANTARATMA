@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <div class="jumbotron mt-4 bg-info">
        <h1 class="display-4">Bienvenido a ANTARATMA</h1>
        <p class="lead">Explora los diferentes tipos de horóscopos: horóscopo chino, horóscopo occidental y numerología.
        </p>

        <hr class="my-4">
        @guest
        <p>Obtén tu predicción personalizada registrándote en nuestro sitio.</p>
        <a class="btn btn-secondary btn-lg" href="{{ route('register') }}" role="button">Regístrate</a>
        @endguest
    </div>

    <div class="row">
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mb-4">
                <img src="https://www.clarin.com/img/2023/03/15/E5dDV1-lE_1200x0__1.jpg" class="card-img-top"
                    alt="Horóscopo Chino">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Horóscopo Chino</h5>
                    <p class="card-text flex-grow-1">
                        El horóscopo chino se basa en un ciclo de doce años, cada uno de los cuales está asociado a un
                        animal y sus atributos. Estos son: Rata, Buey, Tigre, Conejo, Dragón, Serpiente, Caballo, Cabra,
                        Mono, Gallo, Perro y Cerdo. Cada año está regido por uno de estos animales, y se cree que las
                        personas nacidas en ese año comparten ciertos rasgos de carácter y fortuna.
                    </p>
                    <a href="{{ route('register') }}" class="btn btn-secondary mt-auto">Descubre más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mb-4">
                <img src="https://content20.lecturas.com/medio/2019/02/11/banner-horoscopo_af403d77.png"
                    class="card-img-top" alt="Horóscopo Occidental">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Horóscopo Occidental</h5>
                    <p class="card-text flex-grow-1">
                        El horóscopo occidental se basa en el zodiaco, una franja del cielo que se divide en doce
                        signos, cada uno asociado a una constelación. Estos signos son: Aries, Tauro, Géminis, Cáncer,
                        Leo, Virgo, Libra, Escorpio, Sagitario, Capricornio, Acuario y Piscis. Cada signo tiene un
                        período específico del año y se asocia a ciertas características y predicciones.
                    </p>
                    <a href="{{ route('register') }}" class="btn btn-secondary mt-auto">Descubre más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mb-4">
                <img src="https://tvazteca.brightspotcdn.com/dims4/default/dadc3d0/2147483647/strip/true/crop/1640x924+0+0/resize/928x523!/format/jpg/quality/90/?url=http%3A%2F%2Ftv-azteca-brightspot.s3.amazonaws.com%2F5b%2F3e%2Fd8a7784843ffb8081e5924f64fba%2Fque-cambios-vienen-a-tu-vida-segun-la-numerologia.jpg"
                    class="card-img-top" alt="Numerología">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Numerología</h5>
                    <p class="card-text flex-grow-1">
                        La numerología es el estudio de los números y su influencia en nuestras vidas. Se basa en la
                        creencia de que los números tienen un poder especial y pueden revelar aspectos importantes de
                        nuestra personalidad y destino. El número del camino de vida, calculado a partir de la fecha de
                        nacimiento, es uno de los conceptos centrales de la numerología.
                    </p>
                    <a href="{{ route('register') }}" class="btn btn-secondary mt-auto">Descubre más</a>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Historia y Origen del Horóscopo</h5>
                    <p class="card-text">
                        El horóscopo ha sido una herramienta para comprender la personalidad y predecir el futuro desde
                        tiempos antiguos. Los babilonios fueron los primeros en sistematizar el zodiaco alrededor del
                        siglo VII a.C. Los griegos adoptaron esta práctica y la difundieron por todo el mundo
                        occidental. En China, el horóscopo tiene raíces profundas en la filosofía y la astronomía, y ha
                        sido una parte integral de la cultura durante milenios.
                    </p>
                    <p>
                        La numerología, por otro lado, tiene sus orígenes en las antiguas civilizaciones de Egipto y
                        Babilonia, y fue popularizada en la cultura occidental por el matemático griego Pitágoras. Estos
                        sistemas de adivinación han evolucionado con el tiempo, pero su propósito central sigue siendo
                        el mismo: ofrecer una guía y una comprensión más profunda de nuestras vidas.
                    </p>
                    <p>
                        Hoy en día, millones de personas en todo el mundo consultan su horóscopo diariamente para
                        obtener una visión de su futuro y una mejor comprensión de sí mismos. Ya sea a través del
                        horóscopo chino, el horóscopo occidental o la numerología, estos sistemas ofrecen una conexión
                        con la sabiduría antigua y una guía para el presente y el futuro.
                    </p>
                    <p>
                        Únete a nosotros y descubre lo que el horóscopo tiene reservado para ti. Explora, aprende y
                        encuentra respuestas a las preguntas que te han intrigado. ¡Te damos la bienvenida a este
                        fascinante viaje a través del tiempo y las estrellas!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
