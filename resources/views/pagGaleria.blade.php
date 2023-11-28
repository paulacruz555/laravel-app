<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <!---<a href="{{ route('xGaleria') }}"> Galeria </a>
   <a href="{{ route('xLista') }}"> Lista </a>--->
   
   @extends('pagPlantilla')

   @section('titulo')
   <h1> Página de Galeria </h1>
   @endsection

   @section('seccion')
   <h3> Foto de código {{ $valor }} </h3>
   @endsection 
</body>
</html>