@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
<div class="container">
    <h1>Contacto</h1>
    <form>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Tu nombre">
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" id="email" placeholder="Tu correo electrónico">
        </div>
        <div class="form-group">
            <label for="message">Mensaje</label>
            <textarea class="form-control" id="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>
</div>
@endsection
