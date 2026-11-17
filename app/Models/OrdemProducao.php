<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdemProducao extends Model
{
    protected $table = 'ordens_producao';

    public function carta()
    {
        return $this->belongsTo(Carta::class);
    }

    public function duende()
    {
        return $this->belongsTo(User::class, 'duende_id');
    }
}
