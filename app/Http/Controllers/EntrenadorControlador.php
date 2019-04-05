<?php

namespace Pokemon\Http\Controllers;

use Pokemon\Entrenador;
use Illuminate\Http\Request;

class EntrenadorControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $entrenadores = Entrenador::all();
        return view('entrenadores.index', compact('entrenadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('entrenadores.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validaciones =$request->validate([
            'nombre'=>'required|max: 10',
            'avatar'=>'required',
        ]);
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $nombrefile = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/',$nombrefile);
        }
        $entrenador = new Entrenador();
        $entrenador->nombre = $request->input('nombre');
        $entrenador->slug = $entrenador->nombre;
        $entrenador->avatar = $nombrefile;
        $entrenador->descripcion = $request->input('descripcion');
        $entrenador->save();

        return "Enviado";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug){
        $entrenador = Entrenador::where('slug', '=', $slug)->firstOrFail();
        return view('entrenadores.show', compact('entrenador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug){
        $entrenador = Entrenador::where('slug', '=', $slug)->firstOrFail();
        return view('entrenadores.edit', compact('entrenador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug){
        $entrenador = Entrenador::where('slug', '=', $slug)->firstOrFail();
        $entrenador->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $nombrefile = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/',$nombrefile);
        }
        $entrenador->avatar = $nombrefile;
        $entrenador->save();
        return "Actualizado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
