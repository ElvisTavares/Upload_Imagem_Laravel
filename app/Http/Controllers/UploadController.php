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

        $dados = $request->all();
        Imagem::create($dados);
        return back()->with(['success'=>'OK']);

    }
}
