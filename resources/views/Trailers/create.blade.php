<head>
    <link rel="stylesheet" href="{{ asset('css/trailers.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mod.css') }}">

</head>
@extends('layouts.app')
<form action="{{url('/Trailers')}}" method="post" enctype="multipart/form-data" class="main-form">
{{csrf_field()}}
<label for "Portada" class="form-label">{{'Portada'}}</label>
<input type="file" name="Portada" id="Portada" value="">
</br>
<label for "Titulo" class="form-label">{{'Titulo'}}</label>
<input type="text" name="Titulo" id="Titulo" value="">
</br>
<label for "Descripcion" class="form-label">{{'Descripcion'}}</label>
<input type="text" name="Descripcion" id="Descripcion" value="">
</br>
<label for "Trailer" class="form-label">{{'Trailer'}}</label>
<input type="file" name="Trailer" id="Trailer" value="">
</br>
<div class="form-btn">
<a href="{{url('Trailers/')}}">Regresar</a>
<input type="submit" class="btn btn-log"value= "Añadir Trailer">
</div>
</form>