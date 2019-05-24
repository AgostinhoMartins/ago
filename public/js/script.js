/****************************************************************************
* Nome do ficheiro: script.js 						                        *
* UC: P2					                                                *
* @author Agostinho Martins						                            *
* @versão 1.1					                                    		*
* Data: 1 Maio de 2019						                                *
* Descrição: ficheiro javascript com jquery do website da empresa AGO		*
*****************************************************************************/
// script para colocar o item escolhido na pesquisa
$(function () {
  $(".dropdown-menu li a").click(function(){
  $(".procurar:first-child").html($(this).text());
});

});

/*
* o código hmtl e script que se usou:
* <li class="nav-item active"><a href="#" class="nav-link">Início</a></li>
* <li class="nav-item"><a href="#" class="nav-link">Comprar</a></li>
*
* script para colocar ativo o menu selecionado, o "e.preventDefault()" permite iniciar a página com o 1º botão activo
$(document).ready(function () {
        $('ul.navbar-nav > li').click(function (e) {
            e.preventDefault();
            $('ul.navbar-nav > li').removeClass('active');
            $(this).addClass('active');                
        });            
    });
 */