<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

    <div class="container">
            <table>
            <thead>
            <tr>
               
                
            </tr>
            </thead>


        <tbody>
            @foreach($imagem as $img)
            <tr>
             
              <td> {{$img->nome}}</td>

                <td><img src="{{ url( "storage/img/{$img->imagem}" ) }}" class="rounded" alt="Cinque Terre" width="304" height="236"> </td>
               
               <td> <a href="{{ url('/edit_img', $img->id) }}" class="btn btn-primary"> Editar</a> </td>

            </tr>


            @endforeach
        </tbody>

        </table>

    </div>
</body>
</html>