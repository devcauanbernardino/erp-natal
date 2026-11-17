<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crianca extends Model
{
    use HasFactory;

    public function cartas()
    {
        return $this->hasMany(Carta::class);
    }

    public function comportamentos()
    {
        return $this->hasMany(Comportamento::class);
    }

}
