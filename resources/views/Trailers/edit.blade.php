<!--form action="{{ url('/Trailers/'.$trailers->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}

<form action="{{url('/Trailers')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<label for "Portada">{{'Portada'}}</label>
<input type="file" name="Portada" id="Portada" value="{{$trailers->Portada}}">
</br>
<label for "Titulo">{{'Titulo'}}</label>
<input type="text" name="Titulo" id="Titulo" value="{{$trailers->Titulo}}">
</br>
<label for "Descripcion">{{'Descripcion'}}</label>
<input type="text" name="Descripcion" id="Descripcion" value="{{$trailers->Descripcion}}">
</br>
<label for "Trailer">{{'Trailer'}}</label>
<input type="file" name="Trailer" id="Trailer" value="{{$trailers->Trailer}}">
</br>
<input type="submit" value= "Editar">
<a href="{{url('Trailers/')}}">Regresar</a>
</form-->

<head>
    <link rel="stylesheet" href="{{ asset('css/trailers.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mod.css') }}">

</head>
@extends('layouts.app')
<form action="{{ url('/Trailers/'.$trailers->id)}}" method="post" enctype="multipart/form-data" class="main-form">
{{csrf_field()}}
{{method_field('PATCH')}}

<form action="{{url('/Trailers')}}" method="post" enctype="multipart/form-data" >
{{csrf_field()}}
<label for "Portada" class="form-label">{{'Portada'}}</label>
<input type="file" name="Portada" id="Portada" value="{{$trailers->Portada}}">
</br>
<label for "Titulo" class="form-label">{{'Titulo'}}</label>
<input type="text" name="Titulo" id="Titulo" value="{{$trailers->Titulo}}">
</br>
<label for "Descripcion" class="form-label">{{'Descripcion'}}</label>
<input type="text" name="Descripcion" id="Descripcion" value="{{$trailers->Descripcion}}">
</br>
<label for "Trailer" class="form-label">{{'Trailer'}}</label>
<input type="file" name="Trailer" id="Trailer" value="{{$trailers->Trailer}}">
</br>
<div class="form-btn">
<a href="{{url('Trailers/')}}">Regresar</a>
<input type="submit" class="btn btn-log"value= "Añadir Trailer">
</div>
</form>