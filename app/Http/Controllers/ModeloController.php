<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Modelo;

class ModeloController extends Controller
{
    public function addModelo(){

        $marcas = Marca::all();

        return view('site.addModelo', ['marcas' => $marcas]);
    }

    public function insert(Request $request, Modelo $modelo){
        $input = $request->validate([
         'nome' => 'string|required',
         'marca_id' => 'required',
         'ano' => 'string|required',
         'combustivel' => 'string|required',
        ]);

        dd($input);

        //$marca->modelos()->create($input);
        $modelo->create($input);

        return redirect()->route('site.lista');
    }
}
