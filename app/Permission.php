<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    protected $fillable=[
        'name','slug','description'
    ];

    // Relaciones
    public function role(){
        return $this->belongsTo("App\Role");
    }
    public function users(){
        return $this->belongsToMany("App\User");
    }

    // Almacenamiento

    // Validación

    // Recuperación de Información

    // Otras Operaciones
}
