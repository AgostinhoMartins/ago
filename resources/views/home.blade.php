<?php
/**************** Descrição do documento ****************
* Nome do ficheiro: home.blade.php                      *
* UC: Projeto Multimédia                                *
* @autor Agostinho Martins                              *
* @versão 1.0                                           *
* Data: 25 Maio de 2019                                 *
* Descrição: Página inicial do website AGO              *
********************************************************/
?>
@extends('layouts.master')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-sucess">
    <p>{{ $message }}</p>
</div>
@endif
<main role="main" aria-labelledby="CONSTRUIMOS PROJETOS INOVADORES">
    <article>
        <section class="section-1">
             <div class="container-fluid imagemfundo d-none d-xl-block">
                 <!-- section da imagem e espaço verde-->
                 <!-- espaço negativo por cima do espaço verde-->
                 <div class="row">
                     <div class="col-6">

                     </div>
                     <div class="col-5">
                         <div id="texto-forma-sobre-a-imagem">
                             <!-- espaço caixa verde 1 -->
                             <div class="caixa1">
                                 <h2 id="CONSTRUIMOS PROJETOS INOVADORES" class="slogan1">:..<br>CONSTRUÍMOS PROJETOS INOVADORES</h2>
                                 <h2 class="slogan2">...</h2>
                                 <!-- Barra de pesquisa -->
                                 <form id="form2" action="comprar" method="get">
                                     <div class="pesquisa form-group">
                                         <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                 <button class="btn btn-outline-light  dropdown-toggle procurar"
                                                             type="button" data-toggle="dropdown" aria-haspopup="true"
                                                             aria-expanded="false">Comprar
                                                 </button>
                                                 <div class="dropdown-menu">
                                                     <li><a class="dropdown-item" href="#">Comprar</a></li>
                                                     <li><a class="dropdown-item" href="#">Arrendar</a></li>
                                                 </div>
                                             </div>
                                             <input type="search" name="search" class="form-control" placeholder="Procurar por cidade" aria-label="Text input with dropdown button">
                                             <span class="input-group-prepend">
                                                <button type="submit" class="btn btn-primary">Procurar</button>
                                             </span>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                     <div class="col">

                     </div>
                 </div>
             </div>
        </section>
        <section class="zona-mobile d-lg-none d-xl-block">
             <div class="container">
                 <!-- <div class="imagemfundo"></div> -->
                 <div class="slogan1">:..<br>CONSTRUÍMOS PROJETOS INOVADORES</div>
                 <div class="slogan2">...</div>
             </div>

        </section>
     </article>
 </main>
@stop
