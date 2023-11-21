<?php

namespace App\Models;
use App\models\clientes;
use App\models\Habitaciones;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    use HasFactory;
    protected $table = 'reservas';
   
    protected $fillable = [
        'nro_reserva',
        'nro_habitacion',
        'id_cliente',
        'fecha_entrada',
        'fecha_salida',
        'estado',
    ];

    public function clientes()
    {
        return $this->belongsTo(clientes::class, 'id_cliente', 'id_cliente');
    }

     public function habitaciones()
    {
         return $this->belongsTo(Habitaciones::class, 'nro_habitacion','id');
    }
}
