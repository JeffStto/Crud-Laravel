<!-- //carpeta plantilla , pages , examples, projects.html y cortar y pegar solo tabla -->

<!-- //aplicar herencia -->
<!-- (incluir todo de la plantilla que se esta usando) -->

@extends('prueba')

<!-- //toma valor yield -->
@section('contenido')

<div class="row">
    <div class="col-lg-11">
        <h2>Listado de Categorias</h2>
    </div>

    <div class="col-lg-1">
        <a href="/Categorias/crear" class="btn btn-success">Registrar</a>
    </div>
</div>

<table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Nombre
                      </th>
                      <th style="width: 30%">
                          Descripcion
                      </th>
                      <th>
                          Condicion
                      </th>
                      <!-- //no se usa -->
                      <!-- <th style="width: 8%" class="text-center">
                          Status
                      </th> -->
                      <th style="width: 28%">
                      </th>
                  </tr>
              </thead>
              <tbody>

              <!-- listar--------------------------------------- -->
                  @foreach($categorias as $categoria)
                <tr>
                  <td>{{$categoria->id}}</td>
                  <td>{{$categoria->nombre}}</td>
                  <td>{{$categoria->descripcion}}</td>
                  <td>{{$categoria->condicion}}</td>
                      <td class="project-actions text-right">
                          <!-- quitar code -->
                          <!-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                    <form action="{{ url('/Categorias/eliminar', $categoria) }}" method="post">
                        @csrf
                          <a class="btn btn-info btn-sm" href="{{url('/Categorias/editar', $categoria->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">
                              <i class="fas fa-trash"> Eliminar</i>
                            </button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>

@endsection