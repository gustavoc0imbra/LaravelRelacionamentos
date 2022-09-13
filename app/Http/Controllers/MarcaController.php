<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function lista()
    {
        $marcas = Marca::with('modelos')->get();

        return view('site.lista', ['marcas' => $marcas]);
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'nome' => 'string|required|max:80',
            'pais' => 'string|nullable',
            'ano' => 'string|required|max:4',
        ]);

        $marca = Marca::create($input);

        return redirect()->route('site.lista');

    }

    public function edit($id)
    {
        $marca = Marca::find($id);
        return view('site.editView', ['marca' => $marca]);
    }

    public function update(Request $request, $id)
    {
        $input = $request->validate([
            'nome' => 'string|required|max:80',
            'pais' => 'string|nullable',
            'ano' => 'string|required|max:4',
        ]);

        $marca = Marca::find($id);
        $marca->update($input);
        return redirect()->route('site.lista');
    }

    public function destroy($id)
    {
        $marca = Marca::find($id);

        $marca->delete();

        return redirect()->route('site.lista');
    }
}
