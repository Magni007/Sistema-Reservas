<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    //Indicar de forma manual a que tabla se va a conectar
    //protected $table ='roles';

    protected $fillable = [
        'name'
    ];


    //Relación con usuarios
    public function users()
    {
        return $this->hasMany(User::class,'rol_id');
    }
}
