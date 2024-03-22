<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Relación Uno a Uno con Grupo (Usuario pertenece a un Grupo)
    public function grupo()
    {
        return $this->hasOne(Grupo::class, 'id');
    }

    // Relación Uno a Uno con Curso (Usuario pertenece a un Curso)
    public function curso()
    {
        return $this->hasOne(Curso::class, 'id');
    }
}
