@extends ("../layouts.plantilla")

@section("header")

@endsection

@section("body")

  <form action="/producto" method="post">
    <label for="nombreArticulo">Articulo: </label>
    <input type="text" name="nombreArticulo">
    <label for="seccion">Seccion: </label>
    <input type="text" name="seccion">
    <label for="precio">Precio: </label>
    <input type="text" name="precio">
    <label for="fecha">Fecha: </label>
    <input type="text" name="fecha">
    <label for="paisDeOrigen">Pais de Origen: </label>
    <input type="text" name="paisDeOrigen">
    <input type="submit" value="Enviar">
    {{csrf_field()}}
  </form>
  @if (count($errors)>0)
      @foreach ( $errors->all() as $err )
        {{$err}}
      @endforeach
      
    
    @endif
@endsection