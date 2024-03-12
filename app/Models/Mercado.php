<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercado extends Model
{
    use HasFactory;
    protected $table = 'mercado';
    protected $fillable = ['nome_produto', 'marca', 'data_validade', 'fornecedor', 'descricao', 'codigo', 'valor'];
}


