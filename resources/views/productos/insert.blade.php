@extends ("../layouts.plantilla")

@section("header")

@endsection

@section("body")

  <form action="" method="post">
    <label for="nameArticulo">Articulo: </label>
    <input type="text" name="nameArticulo">
    <label for="seccion">Seccion: </label>
    <input type="text" name="seccion">
    <label for="precio">Precio: </label>
    <input type="text" name="precio">
    <label for="fecha">Fecha: </label>
    <input type="text" name="fecha">
    <label for="paisDeOrigen">Pais de Origen: </label>
    <input type="text" name="paisDeOrigen">
    <input type="submit" value="Enviar">
  </form>
@endsection