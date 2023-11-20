<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraccion extends Model
{
    use HasFactory;

    protected $primarykey = "id";
    
    protected $table = "infracciones";

    protected $fillable = ['fecha', 'descripcion', 'auto_id', 'tipo'];
    // Puedes agregar relaciones aquí si es necesario
}
