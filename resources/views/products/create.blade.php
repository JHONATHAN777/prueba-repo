@extends('layouts\template')


@section('title', 'crear producto')

@section('contenido')

<main>
    <div class="container py-2">

        <h1>Formulario para medicamentos</h1>

        <div class="container mt-5">
            <h2>Crear Producto</h2>
            @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <form action="{{{route('product.store')}}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre del Producto</label>
                    <input type="text" class="form-control" id="nombre" name="name">
                </div>
                <div class="form-group">
                    <label for="precio">Precio del Producto (decimal)</label>
                    <input type="number" step="0.01" class="form-control" id="precio" name="price">
                </div>
                <button type="submit" class="btn btn-primary my-4">Crear Producto</button>
            </form>
        </div>

    </div>
</main>