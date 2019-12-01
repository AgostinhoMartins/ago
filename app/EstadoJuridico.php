<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoJuridico extends Model
{
    protected $table = "estado_juridico";
    protected $primaryKey = "id";

    protected $fillable = array('estadoJuridico');
    public $timestamps = true;
}
