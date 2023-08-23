@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><b>Fama</b>Licores</h1>
@stop

@section('content')
<h2>INGRESAR NUEVO ARTICULO</h2>

<form action="/articulos" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Articulo</label>
    <input id="Articulo" name="Articulo" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Categoria</label>
    <input id="Categoria" name="Categoria" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="Cantidad" name="Cantidad" type="number" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="Precio" name="Precio" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop