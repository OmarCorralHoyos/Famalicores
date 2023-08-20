@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><b>Fama</b>Licores | Ventas</h1>
    
@stop

@section('content')
     <!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="ventas/create" class="btn btn-primary mb-3">Nueva venta</a>


<table id="ventas" class="table table-dark table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FECHA DE VENTA</th>
      <th scope="col">ARTICULO</th>
      <th scope="col">CATEGORIA</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">PRECIO</th>
      <th scope="col">TOTAL</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($ventas as $venta)
    <tr>
        <td>{{$venta->id}}</td>
        <td>{{$venta->Fecha_de_venta}}</td>
        <td>{{$venta->Articulo}}</td>
        <td>{{$venta->Categoria}}</td>
        <td>{{$venta->Cantidad}}</td>
        <td>{{$venta->Precio}}</td>
        <td>{{$venta->Total}}</td>
        <td>
         <form action="{{ route('ventas.destroy',$venta->id) }}" method="POST">
          <a href="/ventas/{{$venta->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#ventas').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>
</script>

@stop