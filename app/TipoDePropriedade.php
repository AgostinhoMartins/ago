<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDePropriedade extends Model
{
    protected $table = "tipo_de_propriedade";
    protected $primaryKey = "id";

    protected $fillable = array('tipoDePropriedade');
    public $timestamps = true;
}
