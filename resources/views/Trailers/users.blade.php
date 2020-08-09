
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
 </head>
@extends('layouts.app')

@section('content')

<div class="all">
    <div class="main-trailers">
<table class="table">
    <thead class="thead">
   
        <tr>
            <th>ID<th>
            <th>Titulo</th>
            <th>Descripcion</th>
           
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
