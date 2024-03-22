<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    
    // Relación Uno a Uno inversa con Usuario (Grupo pertenece a un Usuario)
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id');
    }

    // Relación Uno a Uno con Curso (Grupo tiene un Curso)
    public function curso()
    {
        return $this->hasOne(Curso::class, 'id');
    }
}
