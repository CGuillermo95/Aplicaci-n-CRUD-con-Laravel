<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\Tarea;
use App\Http\Controllers\TareaController;

class Tarea extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Finalizada',
        'Fecha_limite',
        'Urgencia',
    ];

    protected $dates = ['Fecha_limite'];

    public const URGENCIAS = ['Baja', 'Normal', 'Alta'];

    public function Urgencias()
    {
        return self::URGENCIAS[$this->Urgencia];
    }

    public function estaFinalizada()
    {
        return $this->Finalizada == 1 ? 'Sí' : 'No';
    }
}
