<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagem;

class UploadController extends Controller
{
    public function index(){
        return view('imagem.index');
    }


    public function create(){
        return view('imagem.index');
    }


    public function store(Request $request){
        //dd($request->all());
        dd($request->nome);
        //$dados = $request->all();
        //Imagem::create($dados);
        //$dados = $request->nome;
        $dados = $request->only(['nome', 'imagem']);
        dd($dados);
        
      if ($request->file('imagem')->isValid()) {
          # code...
         // $nome_arquivo = $request->name . "." .$request->imagem->extension();
         //dd($request->file('imagem')->store('img'));

         $nome_arqu = $request->nome . "." . $request->imagem->extension();
         $request->file('imagem')->storeAs('img',$nome_arqu); 



         
      }

      


      

   

    }
}
