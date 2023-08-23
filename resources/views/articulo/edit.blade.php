@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
    <h2>EDITAR ARTICULOS</h2>

<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Articulo</label>
    <input id="Articulo" name="Articulo" type="text" class="form-control" value="{{$articulo->Articulo}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Categoria</label>
    <input id="Categoria" name="Categoria" type="text" class="form-control" value="{{$articulo->Categoria}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="Cantidad" name="Cantidad" type="number" class="form-control" value="{{$articulo->Cantidad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="Precio" name="Precio" type="number" step="any" class="form-control" value="{{$articulo->Precio}}">
  </div>
  <a href="/articulos" class="btn btn-secondary">Cancelar</a>
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