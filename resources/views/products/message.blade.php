@extends('layouts\template')


@section('title', 'crear producto')

@section('contenido')

<main>
    <div class="container py-2">

        <h1>{{$msg}}</h1>

        <a href="{{url('product')}}" class="btn btn-secondary">Regresar</a>
    </div>
</main>