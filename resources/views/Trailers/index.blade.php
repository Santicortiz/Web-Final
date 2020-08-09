

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/trailers.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Trailer++') }}</title>

    <!-- Styles  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    </head>
@extends('layouts.app')

@section('content')
<div class="all">
    <div class="main-trailers">
        <!--div class="row"-->
            <!--@include('admin.sidebar')-->
            <a href="{{url('Trailers/create')}}" class="btn btn-log">Agregar Trailer</a>
               
             

<table class="table">
    <thead class="thead">
   
        <tr>
            <th>ID<th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Acciones</th>

        </tr>
    </thead>

    <tbody>
        @foreach ($trailers as $trailers)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td><a href="{{asset('storage').'/'.$trailers->Trailer}}"><img src="{{asset('storage').'/'.$trailers->Portada}}" alt="" class="img-port"></a></td>
            <td>{{$trailers->Titulo}}</td>
            <td>{{$trailers->Descripcion}}</td>
            
            <td>
            <div class="button">
                <a href="{{ url('/Trailers/'.$trailers->id.'/edit') }}" class="btn-action">
                Editar
                </a>
                <form method="post" action="{{url('/Trailers/'.$trailers->id)}}"> 
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn-action" onclick="return confirm('¿Está seguro de que quiere eliminar el trailer?');">Eliminar</button>
            </div>
        </tr>
        @endforeach
     
    </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</html>
