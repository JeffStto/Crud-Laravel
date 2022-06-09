<?php

namespace App\Models;

//librerias para permitir que el modelo funcione
//extends = herencia
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    //definir atributos de la entidad de db
    protected $fillable = ['nombre', 'descripcion', 'condicion'];
}
