<?php
        /**************** Descrição do documento ****************
        * Nome do ficheiro: menu.blade.php                      *
        * UC: Projeto Multimédia                                *
        * @author Agostinho Martins                             *
        * @versão 1.1                                           *
        * Data: 25 Maio de 2019                                 *
        * Descrição: Menu do website da empresa AGO             *
        ********************************************************/
?>
<header>
    <!-- Menu do website -->
    <div class="menu">
        <nav class="navbar navbar-expand-lg bg-white navbar-light navbar-fixed-top" role="navigation">
            <!-- Logótipo -->
            <div class="navbar-brand" href="#"></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <!-- Botões do meio do menu -->
                <ul class="navbar-nav botoes-do-menu-do-meio">
                    <li class="nav-item {{ request()->is('home') ? 'active' : '' }}"><a href="{{ URL::to('home') }}" class="nav-link">INÍCIO</a></li>
                    <li class="nav-item {{ request()->is('comprar') ? 'active' : '' }}"><a href="{{ URL::to('comprar') }}" class="nav-link">COMPRAR</a></li>
                    <li class="nav-item {{ request()->is('arrendar') ? 'active' : '' }}"><a href="{{ URL::to('arrendar') }}" class="nav-link">ARRENDAR</a></li>
                    <li class="nav-item {{ request()->is('contactos') ? 'active' : '' }}"><a href="{{ URL::to('contactos') }}" class="nav-link">CONTACTOS</a></li>
                    <li class="nav-item {{ request()->is('sobre-nos') ? 'active' : '' }}"><a href="{{ URL::to('sobre-nos') }}" class="nav-link">SOBRE NÓS</a></li>
                </ul>

                <ul class="nav navbar-nav flex-row justify-content-between ml-auto botaologin">

                    <li class="dropdown order-1">
                        <!-- Botão login do menu -->
                        <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-dark dropdown-toggle">Login</button>
                        <!-- Janela de formolário para preenchimento do login - menu -->
                        <ul class="dropdown-menu dropdown-menu-right mt-2">
                            <li class="px-3 py-2">
                                <form class="form" role="form">
                                    <div class="form-group">
                                        <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                    <div class="form-group text-center">
                                        <small><a href="#" data-toggle="modal" data-target="#modalPassword">Esqueceu-se da senha?</a></small>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- janela modal para preenchimento do login no "Esqueceu-se da senha" -->
    <div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Esqueceu-se da senha</h3>
                    <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p>Apagar a senha..</p>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
                    <button class="btn btn-primary">Gravar as alterações</button>
                </div>
            </div>
        </div>
    </div>
</header>
