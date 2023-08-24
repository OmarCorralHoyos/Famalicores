<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Venta;

class VentaController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
       }
       
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::all();
        return view('venta.index')->with('ventas',$ventas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('venta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ventas = new Venta();
        $ventas->Fecha_de_venta = $request->get('Fecha_de_venta');
        $ventas->Articulo = $request->get('Articulo');
        $ventas->Categoria = $request->get('Categoria');
        $ventas->Cantidad = $request->get('Cantidad');
        $ventas->Precio = $request->get('Precio');
        $ventas->Total = $request->get('Total');
        $ventas->save();

        return redirect('/ventas');
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
        $venta = Venta::find($id);
        return view('venta.edit')->with('venta',$venta);
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
        $venta = Venta::find($id);
        $venta->Articulo = $request->get('Articulo');
        $venta->Categoria = $request->get('Categoria');
        $venta->Cantidad = $request->get('Cantidad');
        $venta->Precio = $request->get('Precio');
        $venta->Total = $request->get('Total');
        $venta->save();

        return redirect('/ventas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venta = Venta::find($id);        
        $venta->delete();

        return redirect('/ventas');
    }
}
