<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Professor extends Model
{
    use HasFactory;
    protected $table = 'professor';
    public $timestamps = false;

    public function componentes(): HasMany
    {
        return $this->hasMany(Componente::class);
    }

    public function horarios(): HasMany
    {
        return $this->hasMany(Horario::class);
    }

}
