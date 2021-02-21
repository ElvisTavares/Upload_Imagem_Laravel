

<table>
    <thead>
    <tr>
       
        <td>Imagem</td>
    </tr>
    </thead>


<tbody>
    @foreach($imagem as $img)
    <tr>
     
     
        <img src="{{ url( "storage/img/{$img->imagem}" ) }} ">
        
    </tr>

    @endforeach
</tbody>

</table>