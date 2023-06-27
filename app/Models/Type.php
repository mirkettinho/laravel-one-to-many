<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    // RELAZIONE TABELLA PROJECTS
    // OGNI TIPO HA TANTI PROGETTI QUINDI LA FUNZIONE è AL PLURALE
    public function projects(){
      return $this->hasMany(Project::class);
    }
}
