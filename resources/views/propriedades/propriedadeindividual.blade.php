<?php
/*************************** Descrição do documento *********************************
* Nome do ficheiro: propriedadeindividual.blade.php                                 *
* UC: Projeto Multimédia                                                            *
* @autor Agostinho Martins                                                          *
* @versão 1.0                                                                       *
* Data: 01 Junho de 2019                                                            *
* Descrição: informação individual de cada propriedades, página do website da AGO   *
*************************************************************************************/
?>
@extends('layouts.master')

@section('content')
 <link rel="stylesheet" type="text/css" href="{{ asset('css/styles3.css') }}">

    <div id="carouselAGO" class="carousel slide" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
            <div class="row">
            @foreach( $fotografias as $fotografia )
                <li data-target="#carouselAGO" data-slide-to="{{ $loop->index }}" class="  {{ $loop->first ? 'active' : '' }}" ></li>
            @endforeach
            </div>
        </ol>
        <div class="carousel-inner">
        <div class="row">
            @foreach( $fotografias as $fotografia )
                <div class="carousel-item   {{ $loop->first ? 'active' : '' }}">
                    <img class="d-block w-100" src="imagens/propriedade/{{ $fotografia->link }}"
                    alt="First slide">
                </div>
            @endforeach
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselAGO" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselAGO" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="form-group bg-success text-white titulo-3"><br>
                    <div>&nbsp;&nbsp;&nbsp;<span class="titulo-3">Informação</span></div>
                </div>
            </div>
            <div class="col-2 margem-superior"></div>
        </div><br>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="" method="post">

                    <div class="form-row">
                        <div class="my-3"></div>
                        <div class="form-group col-md-2">
                            <label  for="nomeLogo">Referência</label>
                            <input class="form-control" type="text" id="nomeLogo" name="nomeLogo" placeholder="">
                        </div>
                        <div class="form-group col-md-5">
                            <label  for="nomeLogo">Tipo de Propriedade</label>
                            <input class="form-control" type="text" id="nomeLogo" name="nomeLogo" placeholder="">
                        </div>
                        <div class="form-group col-md-5">
                            <label  for="nomeLogo">Estado Jurídico</label>
                            <input class="form-control" type="text" id="nomeLogo" name="nomeLogo" placeholder="">
                        </div>
                    </div>
                    <hr class="my-5">
                    <div class="form-group">
                        <label  for="nomeLogo">Nome da Propriedade</label>
                        <input class="form-control" type="text" id="nomeLogo" name="nomeLogo" placeholder="">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nomeAlternativoLogo">Distrito</label>
                            <input class="form-control" type="text" id="nomeAlternativoLogo" name="nomeAlternativoLogo" placeholder="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nomeAlternativoLogo">Concelho</label>
                            <input class="form-control" type="text" id="nomeAlternativoLogo" name="nomeAlternativoLogo" placeholder="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nomeAlternativoLogo">Freguesia</label>
                            <input class="form-control" type="text" id="nomeAlternativoLogo" name="nomeAlternativoLogo" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="nomeAlternativoLogo">zona</label>
                            <input class="form-control" type="text" id="nomeAlternativoLogo" name="nomeAlternativoLogo" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="nomeAlternativoLogo">C. Postal</label>
                            <input class="form-control" type="text" id="nomeAlternativoLogo" name="nomeAlternativoLogo" placeholder="">
                        </div>
                        <div class="form-group col-md-5">
                            <label  for="nomeLogo">Cidade</label>
                            <input class="form-control" type="text" id="nomeLogo" name="nomeLogo" placeholder="">
                        </div>
                    </div>
                    <hr class="my-5">
                    <div class="form-group">
                        <label  for="nomeLogo">Descrição</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                    <hr class="my-5">
                    <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="nomeAlternativoLogo">Ano da Construção</label>
                                <input class="form-control" type="text" id="nomeAlternativoLogo" name="nomeAlternativoLogo" placeholder="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nomeAlternativoLogo">Area de Construção</label>
                                <input class="form-control" type="text" id="nomeAlternativoLogo" name="nomeAlternativoLogo" placeholder="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nomeAlternativoLogo">Fase de Construção</label>
                                <input class="form-control" type="text" id="nomeAlternativoLogo" name="nomeAlternativoLogo" placeholder="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nomeAlternativoLogo">Estado Conservação</label>
                                <input class="form-control" type="text" id="nomeAlternativoLogo" name="nomeAlternativoLogo" placeholder="">
                            </div>
                        </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label  for="nomeLogo">Tipologia</label>
                            <input class="form-control" type="text" id="nomeLogo" name="nomeLogo" placeholder="">
                        </div>
                        <div class="form-group col-md-3">
                            <label  for="nomeLogo">Assoalhadas</label>
                            <input class="form-control" type="text" id="nomeLogo" name="nomeLogo" placeholder="">
                        </div>
                        <div class="form-group col-md-3">
                            <label  for="nomeLogo">Número quartos</label>
                            <input class="form-control" type="text" id="nomeLogo" name="nomeLogo" placeholder="">
                        </div>
                        <div class="form-group col-md-3">
                            <label  for="nomeLogo">Numero Varandas</label>
                            <input class="form-control" type="text" id="nomeLogo" name="nomeLogo" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label  for="nomeLogo">Número de Garagens</label>
                            <input class="form-control" type="text" id="nomeLogo" name="nomeLogo" placeholder="">
                        </div>
                        <div class="form-group col-md-4">
                            <label  for="nomeLogo">Estacionamento Reservado</label>
                            <input class="form-control" type="text" id="nomeLogo" name="nomeLogo" placeholder="">
                        </div>
                        <div class="form-group col-md-4">
                            <label  for="nomeLogo">Número de Casas de Banho</label>
                            <input class="form-control" type="text" id="nomeLogo" name="nomeLogo" placeholder="">
                        </div>
                    </div>
                    <hr class="my-5">
                    <div class="form-row">
                        <div class="form-group col-ld">
                            <label for="nomeAlternativoLogo">Certificado de Energia</label>
                            <input class="form-control" type="text" id="nomeAlternativoLogo" name="nomeAlternativoLogo" placeholder="">
                        </div>
                        <div class="form-row">
                                <div class="form-group col-ld">
                                    <label for="nomeAlternativoLogo">Permite ter Animais?</label>
                                    <input class="form-control" type="text" id="nomeAlternativoLogo" name="nomeAlternativoLogo" placeholder="">
                                </div>
                            </div>
                    </div>

                    <hr class="my-5"><h4>Geolocalização</h4>
                    <div class="form-row">

                        <div class="form-group col-ld">
                            <label for="nomeAlternativoLogo">Latitude (horizontal: Norte-sul)</label>
                            <input class="form-control" type="text" id="nomeAlternativoLogo" name="nomeAlternativoLogo" placeholder="">
                        </div>
                        <div class="form-group col-ld">
                            <label for="nomeAlternativoLogo">Longitude (vertical: Este, Oeste)</label>
                            <input class="form-control" type="text" id="nomeAlternativoLogo" name="nomeAlternativoLogo" placeholder="">
                        </div>
                    </div>
                    <br>
                    <h3>Mapa</h3>


                    {{-- <div class="form-group">
                        <button class="btn btn-success" type="submit" >Submeter</button>
                        <input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div> --}}
                </form>
                <!--mapa -->

                <div id='mapDiv'></div>
                <script type="text/javascript"

                src="http://js.sapo.pt/Snippets/Maps.js?lat=40.209730&;lon=-8.433088&zoom=12&height=400&width=730&divid=mapDiv">

                </script>
            </div>
            <div class="col-2"></div>
            <br>

        </div><br>
    </div>
@stop
