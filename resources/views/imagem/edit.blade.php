<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

   <form action="{{ url('/edit_img', $imagem->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    nome
    <input type="text" name="nome" value="{{$imagem->nome}}">
    <br>
    <br>
    Imagem
    <img src="{{ url( "storage/img/{$imagem->imagem}" ) }}" class="rounded" alt="Cinque Terre" width="304" height="236"><br>
    <input type="file" name="imagem" value="{{$imagem->imagem}}"> 
    <br>
    <br>
    <input type="submit" value="Enviar" class="btn btn-primary">

    </form>