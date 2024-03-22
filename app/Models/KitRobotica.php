<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KitRobotica extends Model
{
    use HasFactory;

    // Relación Uno a Uno inversa con Curso (Kit de Robótica pertenece a un Curso)
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }
}
