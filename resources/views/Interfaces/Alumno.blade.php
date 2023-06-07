@extends('layouts.principal')

@section('contenido-principal')

<div class="container" style="margin-top: 20px">
    <div class="d-flex justify-content-center align-items-center">
      <div class="card" style="width: auto;">
        <div class="card-body">
          <h5 class="card-title">Datos Alumno</h5>
          <h6 class="card-subtitle mb-2 text-muted">Ingresar datos</h6>
          <form action="#" method="POST">
            @csrf
            <div class="mb-3">
              <label for="rut" class="form-label">Rut</label>
              <input type="text" class="form-control" id="rut" name="rut">
            </div>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
          </form>
        </div>
      </div>
      <div class="card mx-2" style="width: auto;">
        <div class="card-body">
          <h5 class="card-title">Subir Propuesta</h5>
          <form>
            <div class="mb-3">
              <label for="fileInput" class="form-label">Seleccionar archivo</label>
              <input type="file" class="form-control" id="fileInput" accept="application/pdf">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  

@endsection