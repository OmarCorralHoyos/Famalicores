@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
    <h2>EDITAR VENTAS</h2>

<form action="/ventas/{{$venta->id}}" method="POST">
    @csrf    
    @method('PUT')
 
  <div class="mb-3">
    <label for="" class="form-label">Articulo</label>
    <input id="Articulo" name="Articulo" type="text" class="form-control" value="{{$venta->Articulo}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Categoria</label>
    <input id="Categoria" name="Categoria" type="text" class="form-control" value="{{$venta->Categoria}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="Cantidad" name="Cantidad" type="number" class="form-control" value="{{$venta->Cantidad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="Precio" name="Precio" type="number" step="any" class="form-control" value="{{$venta->Precio}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Total</label>
    <input id="Total" name="Total" type="number" step="any" class="form-control" value="{{$venta->Total}}">
  </div>
    
  <a href="/ventas" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop