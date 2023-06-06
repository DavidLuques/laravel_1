<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model  // model tiene muchos metodos por eso lo extendemos, create , update , delete, y otros....    El orm trata a todo como objetos recordar.
{
    use HasFactory;
    // protected $table= "users"; // esto no es usado mucho, lo que hace es administrar otra vista en este caso users
}
