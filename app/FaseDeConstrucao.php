<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaseDeConstrucao extends Model
{
    protected $table = "fase_de_construcao";
    protected $primaryKey = "id";

    protected $fillable = array('faseDeConstrucao', 'created_at', 'updated_at');
    public $timestamps = true;
}
