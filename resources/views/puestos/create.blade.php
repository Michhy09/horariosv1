@extends("plantillas/plantilla2")

@section("contenido1")
@include("puestos/tablahtml")
@endsection

@section("contenido2")
<h1>Insertando</h1>
<form action="{{route('puestos.store')}}" method="POST">
  @csrf 

  <div class="row mb-3">
    <label for="nombre" class="col-sm-2 col-form-label">ID Pusto :</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="idpuesto" name="idpuesto">
    </div>
  </div>


    <div class="row mb-3">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre :</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
      </div>

      <div class="row mb-3">
        <label for="apellidop" class="col-sm-2 col-form-label">Tipo :</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="tipo" name="tipo">
        </div>
      </div>
    
    <button type="submit" class="btn btn-primary">Grabar</button>
  </form>
@endsection
