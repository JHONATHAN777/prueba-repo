@extends('layouts\template')

@section('title', 'productos')

@section('contenido')


<main>
    <div class="container py-4">


        <table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email @</th>
                    <th scope="col">-post-</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                  <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a name="" id="" class="btn btn-success" href="{{ route('user.show', ['user' => $user]) }}" role="button">ver</a></td>
                  </tr>
                  @endforeach
                 
                </tbody>
          </table>

    </div>
</main>