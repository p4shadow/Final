<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titular extends Model
{
    use HasFactory;

    protected $primarykey = "id";
    
    protected $table = "titulares";

    protected $fillable = ['nombre', 'apellido', 'dni', 'domicilio'];
}
