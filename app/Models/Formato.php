<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
    use HasFactory;


    protected $fillable=[
      'Asunto',
        'Fecha_elaboracion',
        'Destinatario',
        'Depto_destinatario',
        'Cuerpo_texto',
        'Remitente',
        'Depto_remitente',
        



    ];
    protected $table='formatos';
}
