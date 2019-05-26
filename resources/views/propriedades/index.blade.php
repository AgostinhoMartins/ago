<?php
/**************** Descrição do documento ****************
* Nome do ficheiro: index.blade.php                     *
* UC: Projeto Multimédia                                *
* @autor Agostinho Martins                              *
* @versão 1.0                                           *
* Data: 26 Maio de 2019                                 *
* Descrição: Lista das Propriedades do website AGO      *
********************************************************/
?>
@extends('layouts.master2')

@section('content')
    <br>
    <table class="table-bordered table-sm text-center tab-center">
        <tr class="bg-info tab-texto">

            <th>ID</th>
            <th>Ref.</th>
            <th>Nome da Propriedade</th>
            <th>Cidade</th>
            <th>Tipo de propriedade</th>
            <th>Estado Juridico</th>
            <th>Tipologia</th>
            <th>Numero de Quartos</th>
            <th>Data (inserção)</th>
            <th>Data (atualização)</th>
            <th>Editar</th>
            <th>Apagar</th>
        </tr>

        <?php foreach($propriedades as $propriedade): ?>
        <tr>
            <td><?php echo $propriedade->id; ?></td>
            <td><?php echo $propriedade->referencia; ?></td>
            <td><?php echo $propriedade->nomePropriedade; ?></td>
            <td><?php echo $propriedade->cidade; ?></td>
            <td><?php echo $propriedade->tipoDePropriedadeID->tipoDePropriedade; ?></td>
            <td><?php echo $propriedade->estadoJuridicoID->estadoJuridico; ?></td>
            <td><?php echo $propriedade->tipologia; ?></td>
            <td><?php echo $propriedade->numeroQuartos; ?></td>
            <td><?php echo $propriedade->created_at->format('d/m/Y'); ?></td>
            <td><?php echo $propriedade->updated_at->format('d/m/Y'); ?></td>
            <td><a class="btn btn-success tab-botao" {{--  href="{{ URL::route('propriedade.edit', $propriedade->id) }}" --}}>editar </a> </td>
            <td>
                <form {{-- action="{{ route('propriedade.destroy', $propriedade->id) }}" --}} method="POST"> <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger tab-botao">Apagar</button>
                </form>
            </td>
        </tr>
        <?php endforeach ?>

    </table><br>
    <div class="centrar-botao">
            <a class="btn btn-info botao-ext text-white" {{-- href="{{ URL::route('propriedade.create') }}" --}}>Inserir nova Propriedade...</a>
    </div><br><br>
@stop
