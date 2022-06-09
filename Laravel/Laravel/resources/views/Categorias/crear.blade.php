@extends('prueba');
@section('contenido')

<div class="row">
    <div class="col-lg-11">
        <h2>Agregar Nueva Categoria</h2>
    </div>

    <div class="col-lg-1">
        <a href="/Categorias" class="btn btn-success">Atras</a>
    </div>
</div>



<form action="{{url('/Categorias/guardar')}}" method="post">
    <!-- {{}} = impresion php con blade -->
    <!-- ´para que laravel haga insercion
    (proteger falsificacion de peticiones en sitio en sitio cruzados= otro form igual no puede hacer peticion)-->
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion:</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion">
    </div>
    <div class="form-group">
        <label for="condicion">Condicion:</label>
        <input type="text" class="form-control" id="condicion" name="condicion" placeholder="Condicion">
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
@endsection