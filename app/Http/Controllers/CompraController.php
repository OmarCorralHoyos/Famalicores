<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Compra;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compra::all();
        return view('compra.index')->with('compras',$compras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compras = new Compra();
        $compras->Fecha_de_compra = $request->get('Fecha_de_compra');
        $compras->Articulo = $request->get('Articulo');
        $compras->Categoria = $request->get('Categoria');
        $compras->Proveedor = $request->get('Proveedor');
        $compras->Cantidad = $request->get('Cantidad');
        $compras->Precio = $request->get('Precio');
        $compras->Total = $request->get('Total');
        $compras->save();

        return redirect('/compras');
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
        $compra = Compra::find($id);
        return view('compra.edit')->with('compra',$compra);
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
        $compra = Compra::find($id);
        $compra->Articulo = $request->get('Articulo');
        $compra->Categoria = $request->get('Categoria');
        $compra->Proveedor = $request->get('Proveedor');
        $compra->Cantidad = $request->get('Cantidad');
        $compra->Precio = $request->get('Precio');
        $compra->Total = $request->get('Total');
        $compra->save();

        return redirect('/compras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compra = Compra::find($id);        
        $compra->delete();

        return redirect('/compras');
    }
}
