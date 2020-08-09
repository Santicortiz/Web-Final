@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Trailer++') }}</title>

    <!-- Styles -->
 <link rel="stylesheet" href="css/signup.css">   
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="{{ asset('C:\Xampp\htdocs\WEBFINAL\cssweb.css') }}" >
</head>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Menú</div>

                    <div class="card-body">
                     <a href="{{url('Trailers/create')}}">Agregar trailer</a>
                    </div>
             

<table class="table table-light">
    <thead class="thead-light">
   
        <tr>
            <th>n<th>
           
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Acciones</th>

        </tr>
    </thead>

    <tbody>
        @foreach ($trailers as $trailers)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td><a href="{{asset('storage').'/'.$trailers->Trailer}}"><img src="{{asset('storage').'/'.$trailers->Portada}}" alt="" width="150"></a></td>
            <td>{{$trailers->Titulo}}</td>
            <td>{{$trailers->Descripcion}}</td>
            
            <td>
            <a href="{{ url('/Trailers/'.$trailers->id.'/edit') }}">
            Editar
            </a>
            <form method="post" action="{{url('/Trailers/'.$trailers->id)}}"> 
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Está seguro de que quiere eliminar el trailer?');">Eliminar</button>
        </tr>
        @endforeach
    </tbody>
</table>

                </div>
            </div>
        </div>
    </div>
@endsection
</html>



