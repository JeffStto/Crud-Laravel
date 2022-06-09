<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//llamar modelo categorias
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //definir array
        // all() para obtener todos los datos de una consulta (de un modelo)
        //query 
        $categorias = Categoria::all();
        // var_dump($categorias); OK

        return view('Categorias.index')
        //definir una var y le damos un valor para retornar los datos
        ->with('categorias', $categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/Categorias/crear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($request);
        //llevar los valores del form o un modelo
        $categorias = new Categoria([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion'),
        ]);

        $categorias->save(); //guardar datos en la base de datos
        return redirect('/Categorias')->with('success', 'El producto ha sido guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //visualizar vista editar
        $categorias= Categoria::findOrFail($id); //consultar por id con eloquent
        return view('Categorias.editar', compact('categorias')); //var linea 78
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //buscar el registro a editar
        $categorias = Categoria::findOrFail($id);

        //actualizar datos en el modelo(memoria)
        $categorias->nombre = $request->nombre;
        $categorias->descripcion = $request->descripcion;
        $categorias->condicion = $request->condicion;

        //actualizar en db
        $categorias->update();

        //redirigir al metodo index del controlador
        return redirect('Categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categorias)
    {
        //borrar registro
        $categorias->delete();
        return redirect('/Categorias');
    }
}
