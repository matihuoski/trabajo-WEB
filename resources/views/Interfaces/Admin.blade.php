@extends('layouts.principal')

@section('contenido-principal')

    <div class="container-fluid" style="margin-top: 20px">
        <div class="container-fluid" style="margin-top: 20px">
            <h2>Profesores</h2>
            <div class="col-12 col-lg-8 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">#</td>
                            <td class="align-middle">#</td>
                            <td class="align-middle">#</td>
                            <td class="text-center" style="width: 1rem">
                                <!-- BORRAR -->
                                <span data-bs-toggle="tooltip" data-bs-title="Borrar #">
                                    <button type="button" class="btn bt-sm btn-danger pb-0" data-bs-toggle="modal" data-bs-target="#equipoBorrarModal#">
                                        <span class="material-icons">Borrar</span>
                                    </button>
                                </span>
                            </td>
                            <td class="text-center" style="width: 1rem">
                                <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Editar #">
                                    <span class="material-icons">Actualizar</span>
                                </a>
                            </td>
                        </tr>
                        <!-- Modal Borrar Equipo -->
                        <div class="modal fade" id="equipoBorrarModal#" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar Borrar Equipo</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¿Desea borrar al equipo #?
                                </div>
                                <div class="modal-footer">
                                    <form action="#" method="POST">
                                        @csrf
                                        @method('delete') 
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-danger">Borrar Equipo</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container-fluid" style="margin-top: 20px">
            <h2>Alumnos</h2>
            <div class="col-12 col-lg-8 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th colspan="2">Acciones</th>
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
                                    <button type="button" class="btn bt-sm btn-danger pb-0" data-bs-toggle="modal" data-bs-target="#equipoBorrarModal#">
                                        <span class="material-icons">Borrar</span>
                                    </button>
                                </span>
                            </td>
                            <td class="text-center" style="width: 1rem">
                                <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Editar #">
                                    <span class="material-icons">Actualizar</span>
                                </a>
                            </td class="text-center">
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container-fluid" style="margin-top: 20px">
            <h2>Propuestas</h2>
            <div class="col-12 col-lg-8 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Documento</th>
                            <th>Rut Estudiante</th>
                            <th>Estado</th>
                            <th colspan="2">Acciones</th>
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
                            </td>
                            <td class="text-center" style="width: 1rem">
                                <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Editar #">
                                    <span class="material-icons">Actualizar</span>
                                </a>
                            </td class="text-center" style="width: 1rem">
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection