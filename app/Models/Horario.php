<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Horario extends Model
{
    use HasFactory;
    protected $table = 'horario';
    public $timestamps = false;

    public function professor(): BelongsTo
    {
        return $this->belongsTo(Professor::class, 'id_professor');
    }

    public function componenter(): BelongsTo
    {
        return $this->belongsTo(Componente::class, 'id_componente');
    }

    public function turma(): BelongsTo
    {
        return $this->belongsTo(Turma::class, 'id_turma');
    }
}
