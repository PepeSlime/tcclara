<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Componente extends Model
{
    use HasFactory;
    protected $table = 'componente';
    public $timestamps = false;

    public function professor(): BelongsTo
    {
        return $this->belongsTo(Professor::class);
    }
}
