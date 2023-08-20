<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Articulo;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulo.index')->with('articulos',$articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();
        $articulos->Articulo = $request->get('Articulo');
        $articulos->Categoria = $request->get('Categoria');
        $articulos->Cantidad = $request->get('Cantidad');
        $articulos->Precio = $request->get('Precio');
        $articulos->save();

        return redirect('/articulos');
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
        $articulo = Articulo::find($id);
        return view('articulo.edit')->with('articulo',$articulo);
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
        $articulo = Articulo::find($id);
        $articulo->Articulo = $request->get('Articulo');
        $articulo->Categoria = $request->get('Categoria');
        $articulo->Cantidad = $request->get('Cantidad');
        $articulo->Precio = $request->get('Precio');
        $articulo->save();

        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);        
        $articulo->delete();

        return redirect('/articulos');
    }
}
