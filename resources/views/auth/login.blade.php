@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center" style="margin-top: 80px;">
    <div style="width: 400px;">
        <h2 class="mb-4 text-center">Iniciar Sesión</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Contraseña:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Ingresar</button>
        </form>

        <p class="mt-3 text-center">
            ¿No tienes cuenta? <a href="{{ route('register') }}">Crear cuenta</a>
        </p>
    </div>
</div>
@endsection
