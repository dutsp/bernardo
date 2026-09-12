<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensagemController extends Controller
{
    public function enviarMensagem(){
    $mensagem = "olá dionatan";

    return view('mensagem', ['texto' => $mensagem]);
}
public function saudacao(string $nome){
    return view('saudacao',['nome' => $nome]);
}


public function mensagem(string $nome){
    return view('mensagem',['nome' => $nome]);
}
}
    
