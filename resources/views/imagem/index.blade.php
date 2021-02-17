<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/up') }}" method="post" enctype="multipart/form-data">
    @csrf
    nome
    <input type="text" name="nome">
    <br>
    <br>
    <input type="file" name="imagem" > 
    <br>
    <br>
    <input type="submit">

    </form>
</body>
</html>