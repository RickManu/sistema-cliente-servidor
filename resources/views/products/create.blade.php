@extends('layouts.app')

@section('content')
<h1>Crear Producto</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nombre:</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
    <div class="mb-3">
        <label>Precio:</label>
        <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}">
        @error('price') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
    <div class="mb-3">
        <label>Descripción:</label>
        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
    </div>
    <div class="mb-3">
        <label>Stock:</label>
        <input type="number" name="stock" class="form-control" value="{{ old('stock') }}">
        @error('stock') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
    <button type="submit" class="btn btn-success">Crear</button>
</form>
@endsection
