<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model
{
    protected $table = 'propriedade';
    protected $primarykey = 'id';
    protected $fillable = array('nomePropriedade','cidade','freguesia','zona','codigoPostal','areaPropriedade','tipologia','certificadoEnergia','numeroQuartos','numeroGaragem','numeroVarandas','numeroQuartosBanhos','permitirAnimais','created_at', 'updated_at');

    public $timestamps = true;

    // NOTA: O campo da tabela "tipoDePropriedadeID" vão buscar o "id" da tabela "tipo_de_propriedade"
    public function tipoDePropriedadeID()
    {
        echo $fillable;
        return $this->belongsTo('App\TipoDePropriedade');
    }

    public function estadoJuridicoID()
    {
        echo $fillable;
        return $this->belongsTo('App\EstadoJuridico');
    }


    public function faseDeConstrucaoID()
    {
        echo $fillable;
        return $this->belongsTo('App\FaseDeConstrucao');
    }

    public function estadoDeConservacaoID()
    {
        echo $fillable;
        return $this->belongsTo('App\EstadoDeConservacao');
    }
}
