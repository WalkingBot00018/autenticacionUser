<?php

namespace App\Models;
use App\models\Reservas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitaciones extends Model
{
    use HasFactory;
    protected $table = 'habitaciones';
    
    protected $fillable = [
        'nro_habitacion',
        'tipo',
        'precio',
        'disponibilidad',
    ];

    public function Reservas(){
        return $this->hasMany(Reservas::class, 'nro_habitacion', 'id');
    }
}
