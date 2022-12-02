<?php

namespace App\Models;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Categoria extends Model
{
    use HasFactory;

    public function personas()
    {
        return $this->hasMany(Persona::class);
    }
}
