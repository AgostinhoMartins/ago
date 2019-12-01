<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoDeConservacao extends Model
{
    protected $table = "estado_de_conservacao";
    protected $primaryKey = "id";

    protected $fillable = array('estadoDeConservacao');
    public $timestamps = true;
}
