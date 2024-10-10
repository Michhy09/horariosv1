@extends("plantillas/plantilla2")

@section("contenido1")
@include("puestos/tablahtml")
@endsection

@section("contenido2")
<h1>Editando</h1>
<form action="{{route('puestos.update', $puesto->id)}}" method="POST">
  @csrf 
    <div class="row mb-3">
      <div class="row mb-3">
        <label for="nombre" class="col-sm-2 col-form-label">ID Pusto :</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="idpuesto" name="idpuesto" value="{{$puesto->idpuesto}}">
        </div>
      </div>

        <label for="nombre" class="col-sm-2 col-form-label">Nombre :</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{$puesto->nombre}}">
        </div>
      </div>

      <div class="row mb-3">
        <label for="apellidop" class="col-sm-2 col-form-label">Tipo :</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="tipo" name="tipo" value="{{$puesto->tipo}}">
        </div>
      </div>

   
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
@endsection