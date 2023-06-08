@extends('layouts.principal')

@section('contenido-principal')

<div class="container-fluid" style="margin-top: 20px">
    <div class="row">
        <div class="col-lg-8 order-lg-first">
            <h2>Propuestas</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Documento</th>
                            <th>Estado</th>
                            <th>RUT Estudiante</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">#</td>
                            <td class="align-middle">#</td>
                            <td class="align-middle">#</td>
                            <td class="align-middle">#</td>
                            <td class="text-center" style="width: 1rem">
                                <!--BORRAR-->
                                <span data-bs-toggle="tooltip" data-bs-title="Borrar #">
                                    <button type="button" class="btn btn-sm btn-danger pb-0" data-bs-toggle="modal" data-bs-target="#equipoBorrarModal#">
                                        <span class="material-icons">Borrar Comentario</span>
                                    </button>
                                </span>
                            </td>
                            <td class="text-center" style="width: 1rem">
                                <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Editar #">
                                    <span class="material-icons">Poner Comentario</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Datos Personales</h5>
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido">
                        </div>
                        <div class="mb-3">
                            <label for="rut" class="form-label">Rut</label>
                            <input type="text" class="form-control" id="rut" placeholder="Ingrese su rut">
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection