<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model
{
    protected $table = 'propriedade';
    protected $primarykey = 'id';
    protected $fillable = array('referencia','nomePropriedade','linkImagem','cidade','distrito','concelho','freguesia','zona','codigoPostal','areaPropriedade','tipologia','assoalhadas','certificadoEnergia','anoDeConstrucao','numeroQuartos','numeroGaragem','estacionamento','numeroVarandas','numeroCasasBanho','permitirAnimais','frasePublicidadeCurta','frasePublicidadeExtensa','descricao');

    public $timestamps = true;

    public function fotografias()
    {
        return $this->belongsTo('App\Fotografia');
    }

    // NOTA: O campo da tabela "tipoDePropriedadeID" corresponde o campo "id" da tabela "tipo_de_propriedade"
    public function tipoDePropriedadeID()
    {
        return $this->belongsTo('App\TipoDePropriedade');
    }

    public function estadoJuridicoID()
    {
        return $this->belongsTo('App\EstadoJuridico');
    }


    public function faseDeConstrucaoID()
    {
        return $this->belongsTo('App\FaseDeConstrucao');
    }

    public function estadoDeConservacaoID()
    {
        return $this->belongsTo('App\EstadoDeConservacao');
    }

}
