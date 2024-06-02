@extends ("../layouts.plantilla")

@section("header")
 EDITAR_PRODUCTO
@endsection

@section("body")

  <form action="/producto/{{$producto->id}}" method="post">
    <input type="hidden" name="_method" value="PUT">
    <label for="nombreArticulo"  >Articulo: </label>
    <input type="text" name="nombreArticulo" value="{{$producto->nombreArticulo}}">
    <label for="seccion">Seccion: </label>
    <input type="text" name="seccion" value="{{$producto->seccion}}">
    <label for="precio">Precio: </label>
    <input type="text" name="precio" value="{{$producto->precio}}">
    <label for="fecha">Fecha: </label>
    <input type="text" name="fecha" value="{{$producto->fecha}}">
    <label for="paisDeOrigen">Pais de Origen: </label>
    <input type="text" name="paisDeOrigen" value="{{$producto->paisDeOrigen}}">
    <input type="submit" value="Enviar">
    {{csrf_field()}}
  </form>
  <form action="/producto/{{$producto->id}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Eliminar">
  </form>

@endsection