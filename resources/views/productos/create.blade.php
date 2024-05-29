@extends ("../layouts.plantilla")

@section("header")

@endsection

@section("body")

  <form action="/producto" method="post">
    <labewwl for="nombreArticulo">Articulo: </labewwl>
    <input type="text" name="nombreArticulo">
    {{csrf_field()}}
    <input type="submit" value="Enviar">
  </form>
@endsection