@extends('layouts\template')


@section('title', 'crear producto')

@section('contenido')

<main>
    <div class="container py-4">

      @foreach($posts as $post)
        
      
      <div class="card border-success mb-3" style="max-width: 18rem;">
        
        <div class="card-body text-success">
          <h5 class="card-title">{{$post->users->name}}</h5>
          <p class="card-text">{{$post->comment}}</p>
        </div>
     
        
      </div>
      
      @endforeach

    </div>
</main>