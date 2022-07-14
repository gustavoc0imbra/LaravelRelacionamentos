<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lista()
    {
        $marcas = Marca::with('modelos')->get();

        return view('site.lista', ['marcas' => $marcas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marca = Marca::find($id);
        return view('site.editView', ['marca' => $marca]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
