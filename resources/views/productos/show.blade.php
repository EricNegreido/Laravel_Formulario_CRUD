@extends ("../layouts.plantilla")

@section("header")
  MOSTRAR PRODUCTO
@endsection

@section("body")

  <div> ARTICULO: {{$producto->nombreArticulo}}</div>
  <div> SECCION: {{$producto->seccion}}</div>
  <div> PRECIO: {{$producto->precio}}</div>
  <div> FECHA: {{$producto->fecha}}</div>
  <div> PAIS ORIGEN: {{$producto->paisDeOrigen}}</div>

@endsection