<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MercadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mercado')->insert([
            ['nome_produto' => 'farinha', 'marca' => 'dalla', 'data_validade' => '2020_10_03', 'fornecedor' => 'maria', 'descricao' => 'ótimo produto', 'codigo' => '11111', 'valor' => '10.99' ],
            ['nome_produto' => 'arroz', 'marca' => 'dalla', 'data_validade' => '2020_10_03', 'fornecedor' => 'josé', 'descricao' => 'ótimo produto', 'codigo' => '22222', 'valor' => '20.99' ],
            ['nome_produto' => 'fijao', 'marca' => 'dalla', 'data_validade' => '2020_10_03', 'fornecedor' => 'fernanda', 'descricao' => 'ótimo produto', 'codigo' => '33333', 'valor' => '15.00' ],
            ['nome_produto' => 'chiclete', 'marca' => 'dalla', 'data_validade' => '2020_10_03', 'fornecedor' => 'livia', 'descricao' => 'ótimo produto', 'codigo' => '44444', 'valor' => '2.00' ],
            ['nome_produto' => 'suco', 'marca' => 'dalla', 'data_validade' => '2020_10_03', 'fornecedor' => 'joao', 'descricao' => 'ótimo produto', 'codigo' => '55555', 'valor' => '7.00' ],



        ]);

    }
}
