<?php

namespace App\Models;
use App\models\User;
use App\models\Reservas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'telefono',
        'nro_doc',
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'id_cliente', 'id');
    }
    public function Reservas(){
        return $this->hasMany(Reservas::class, 'id_cliente', 'id_cliente');
    }
}
