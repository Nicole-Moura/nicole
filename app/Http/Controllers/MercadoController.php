<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mercado;

class MercadoController extends Controller
{
    public function listar()
{
    $mercado = Mercado::all();
    return view('mercado2')->with('nicole', $mercado);
}

public function listarID($codigo)
{
    $mercado = Mercado::find($codigo);
    return view('mercado')->with('nicole', $mercado);
}

}
