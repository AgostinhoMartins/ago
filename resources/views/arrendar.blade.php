<?php
/**************** Descrição do documento ****************
* Nome do ficheiro: arrendar.blade.php                  *
* UC: Projeto Multimédia                                *
* @autor Agostinho Martins                              *
* @versão 1.0                                           *
* Data: 25 Maio de 2019                                 *
* Descrição: Página comprar do website AGO              *
********************************************************/
?>
@extends('layouts.master')

@section('content')
<?php foreach($propriedades as $propriedade): ?>

<div class="lista_imovel_grupo">
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-sm-5 col-md-4">
                    <div class="imagem">
                        <img src="imagens/propriedade/{{$propriedade->linkImagem}}" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm7 col-md-5">
                    <div class="caract-imovel">
                        <div class="items">Terreno</div>
                        <div class="items">Lugar A</div>
                        <div class="items">Ref: A1-01</div>
                        <div class="items">Preço: 200.000</div>
                        <div class="items">Area bruta</div>
                    </div>
                    <div class="hidden-xs hidden-sm col-md-3">
                        <div class="items">Quartos: 1</div>
                        <div class="items">Varanda: 1</div>
                        <div class="items">Certificado Energia: A+</div>
                        <div class="items">Assoalhadas: 1</div>
                        <div class="items">Casas banho: 1</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>

@stop
