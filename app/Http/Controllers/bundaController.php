<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bundaController extends Controller
{
    public function bunda(string $nome){
        return view('mensagem', ['nome' => $nome]);
    }

    public function bundinha(string $nome, string $sobrenome){
        return view('bundinha', ['nome' => $nome, 'sobrenome' => $sobrenome]);
    }
}