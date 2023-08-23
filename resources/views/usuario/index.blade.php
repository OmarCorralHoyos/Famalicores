@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <h1><b>Fama</b>Licores | Usuarios</h1>
    
@stop

@section('content')
     <!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="articulos/create" class="btn btn-primary mb-3">Nuevo articulo</a>


<table id="usua" class="table table-dark table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ARTICULO</th>
      <th scope="col">CATEGORIA</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td>

          <button type="submit" class="btn btn-danger">Delete</button>
           
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
    $('#usua').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop