<?php
/**************** Descrição do documento ****************
* Nome do ficheiro: comprar.blade.php                   *
* UC: Projeto Multimédia                                *
* @autor Agostinho Martins                              *
* @versão 1.0                                           *
* Data: 25 Maio de 2019                                 *
* Descrição: Página comprar do website AGO              *
********************************************************/
?>
@extends('layouts.master3')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles3.css') }}">

<div class="caixa-ar-titulo text-center ">
    <div><span class="titulo-1">Arrendar</span> <span class="titulo-2">propriedades</span></div>
</div>

<?php foreach($propriedades as $propriedade): ?>

    <div class="d-flex justify-content-center">
        <div class="p-2">
            <img src="imagens/propriedade/{{$propriedade->linkImagem}}" />
        </div>
        <div class="caract-imovel-1 p-2">
            <div class="items">Propriedade: Abbcdef</div>
            <div class="items">Nome: <?php echo $propriedade->nomePropriedade; ?></div>
            <div class="items">Cidade: <?php echo $propriedade->cidade; ?></div>
            <div class="items">Ref: <?php echo $propriedade->referencia; ?></div>
            <div class="items">Preço: <?php echo $propriedade->areaPropriedade; ?></div>
        </div>
        <div class="caract-imovel-2 p-2">
            <div class="items">Quartos: <?php echo $propriedade->numeroQuartos; ?></div>
            <div class="items">Varanda: <?php echo $propriedade->numeroVarandas; ?></div>
            <div class="items">Cert.Energ.: <?php echo $propriedade->certificadoEnergia; ?></div>
            <div class="items">Assoalhadas: <?php echo $propriedade->assoalhadas; ?></div>
            <div class="items">Casa de banho: <?php echo $propriedade->numeroCasasBanho; ?></div>
        </div>
        <div class="caract-imovel-3 text-center p-2">
                <div class="items"><img src="imagens/agente/agente-default1c.jpg" /></div>
                <div class="items">Agostinho Martins</div>
                <div class="items">Agente</div>
        </div>
    </div>

<?php endforeach ?>

@stop
