<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create([
            'nome' => "Notebook",
            'preco' => 7000.50,
            'quantidade' => 12,
        ]);
        Produto::create([
            'nome' => 'Lajota',
            'preco' => 40,
            'quantidade' => 80,

        ]);
         Produto::create([
            'nome' => 'dionatan',
            'preco' => 100,
            'quantidade' => 2,

        ]);
    }
}
