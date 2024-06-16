@extends('layouts.app')

@section('title', 'Perfil')

@section('content')
<div class="container">
    <h1>Perfil</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" disabled>
        </div>
        <div class="form-group">
            <label for="birthdate">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ $user->birthdate }}" required>
        </div>
        <button type="submit" class="btn btn-secondary">Actualizar</button>
    </form>
</div>
@endsection
