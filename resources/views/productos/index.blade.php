@extends ("../layouts.plantilla")

@section("header")
  LEER REGISTROS

@endsection

@section("body")
  <a href="producto/create"> Agregar Registro </a> </br>

  @foreach ($productos as $producto )
  ------------------------------------------------------
  <div> ARTICULO: {{$producto->nombreArticulo}}</div>
  <div> SECCION: {{$producto->seccion}}</div>
  <div> PRECIO: {{$producto->precio}}</div>
  <div> FECHA: {{$producto->fecha}}</div>
  <div> PAIS ORIGEN: {{$producto->paisDeOrigen}}</div>
  <a href="{{route('producto.edit', $producto->id)}}"> EDITAR </a> </br>
  @endforeach

@endsection