<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MensagemController;
use App\Http\Controllers\bundaController;
use App\Http\Controllers\ProdutoController;

Route::inertia('/', 'Welcome')->name('home');
Route::inertia('/bernardo', 'bernardo')->name('bernard');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

Route::get("/ola", function(){
    return "eai";
});

Route::get("/mensagem",[MensagemController::class,"enviarMensagem"]);
Route::get("/saudacao/{nome} ",[MensagemController::class, "saudacao"]);
Route::get("/saudacao/{nome}", [MensagemController::class, "bunda"]);

Route::get("/saudacao/{nome}", [bundaController::class, "bunda"]);
Route::get("/bunda/{nome}/{sobrenome}", [bundaController::class, "bundinha"]);

Route::get('/produtos', [ProdutoController::class, "index"]);