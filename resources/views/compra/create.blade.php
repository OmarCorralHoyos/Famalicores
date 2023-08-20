@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><b>Fama</b>Licores</h1>
@stop

@section('content')
<h2>INGRESAR COMPRA</h2>

<form action="/compras" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Fecha_de_compra</label>
    <input id="Fecha_de_compra" name="Fecha_de_compra" type="date" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Articulo</label>
    <input id="Articulo" name="Articulo" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Categoria</label>
    <input id="Categoria" name="Categoria" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Proveedor</label>
    <input id="Proveedor" name="Proveedor" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="Cantidad" name="Cantidad" type="number" onchange="multiplicar();" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="Precio" name="Precio" type="number" onchange="multiplicar();" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Total</label>
    <input id="Total" name="Total" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <a href="/compras" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script type="text/javascript">
function multiplicar(){
  m1 = document.getElementById("Cantidad").value;
  m2 = document.getElementById("Precio").value;
  r = m1*m2;
  document.getElementById("Total").value = r;

}

</script>
@stop