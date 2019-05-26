<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model
{
    protected $table = 'propriedade';
    protected $primarykey = 'id';
    protected $fillable = array('referencia','nomePropriedade','linkImagem','cidade','distrito','concelho','freguesia','zona','codigoPostal','areaPropriedade','tipologia','assoalhadas','certificadoEnergia','anoDeConstrucao','numeroQuartos','numeroGaragem','estacionamento','numeroVarandas','numeroQuartosBanhos','permitirAnimais','frasePublicidadeCurta','frasePublicidadeExtensa','descricao','created_at', 'updated_at');

    public $timestamps = true;

    // NOTA: O campo da tabela "tipoDePropriedadeID" corresponde o campo "id" da tabela "tipo_de_propriedade"
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
