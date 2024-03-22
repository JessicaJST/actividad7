<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // Relación Uno a Uno inversa con Usuario (Curso pertenece a un Usuario)
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_curso');
    }

    // Relación Uno a Uno inversa con Grupo (Curso pertenece a un Grupo)
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'id_curso');
    }

    // Relación Uno a Uno con KitRobotica (Curso tiene un Kit de Robótica)
    public function kitRobotica()
    {
        return $this->hasOne(KitRobotica::class, 'id_curso');
    }
}
