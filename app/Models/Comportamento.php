<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comportamento extends Model
{
    public function crianca()
    {
        return $this->belongsTo(Crianca::class);
    }

    public function avaliador()
    {
        return $this->belongsTo(User::class, 'avaliado_por');
    }
}
