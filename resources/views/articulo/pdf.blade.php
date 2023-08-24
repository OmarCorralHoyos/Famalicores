<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>
 table {
   width: 100%;
   border: 1px solid #000;
}
th, td {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
   border-collapse: collapse;
}
</style>

</head>
<body>
<h1><b>Fama</b>Licores | Reporte de inventario</h1>
    

    <table  class="table border-collapse: collapse; table-dark table-striped table-bordered shadow-lg mt-4" style="width:100%">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">ARTICULO</th>
          <th scope="col">CATEGORIA</th>
          <th scope="col">CANTIDAD</th>
          <th scope="col">PRECIO</th>
          
        </tr>
      </thead>
      <tbody>    
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{$articulo->id}}</td>
            <td>{{$articulo->Articulo}}</td>
            <td>{{$articulo->Categoria}}</td>
            <td>{{$articulo->Cantidad}}</td>
            <td>{{$articulo->Precio}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    
</body>
</html>


