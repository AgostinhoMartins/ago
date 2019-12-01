<?php

namespace App\Http\Controllers;

use App\Propriedade;
use App\Fotografia;
use App\TipoDePropriedade;
use App\EstadoJuridico;
use App\FaseDeConstrucao;
use App\EstadoDeConservacao;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use function Psy\debug;

class PropriedadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propriedades = Propriedade::orderBy('id')->get();


        //precurrer todas as Propriedades
        foreach($propriedades as $propriedade){
            $propriedade->tipoDePropriedadeID = TipoDePropriedade::find($propriedade->tipoDePropriedadeID);
            $propriedade->estadoJuridicoID = EstadoJuridico::find($propriedade->estadoJuridicoID);
            $propriedade->faseDeConstrucaoID = FaseDeConstrucao::find($propriedade->faseDeConstrucaoID);
            $propriedade->estadoDeConservacaoID = EstadoDeConservacao::find($propriedade->estadoDeConservacaoID);
            $propriedade->fotografias = Fotografia::find($propriedade->id);
            //$propriedade->fotografias = Fotografia::find($propriedade->fotografias);
            //$propriedade->fotografias = Propriedade::find($propriedade->fotografias);

            //echo ($propriedade->fotografias. "<br>");
        }

        return view('propriedades.index', compact('propriedades'));
    }

     // listar cidades para o query
    public function procurar(Request $request)
    {
            $pesquisa = $request->get('pesquisa');
            $propriedades = Propriedade::where('cidade', 'like', '%'.$pesquisa.'%')->get();
            foreach($propriedades as $propriedade){
                $propriedade->tipoDePropriedadeID = TipoDePropriedade::find($propriedade->tipoDePropriedadeID);
                $propriedade->estadoJuridicoID = EstadoJuridico::find($propriedade->estadoJuridicoID);
                $propriedade->faseDeConstrucaoID = FaseDeConstrucao::find($propriedade->faseDeConstrucaoID);
                $propriedade->estadoDeConservacaoID = EstadoDeConservacao::find($propriedade->estadoDeConservacaoID);
            }
            return view('propriedades.comprar', compact('propriedades'));

    }

    public function procurar2(Request $request)
    {
            $pesquisa = $request->get('pesquisa');
            $propriedades = Propriedade::where('cidade', 'like', '%'.$pesquisa.'%')->get();
            foreach($propriedades as $propriedade){
                $propriedade->tipoDePropriedadeID = TipoDePropriedade::find($propriedade->tipoDePropriedadeID);
                $propriedade->estadoJuridicoID = EstadoJuridico::find($propriedade->estadoJuridicoID);
                $propriedade->faseDeConstrucaoID = FaseDeConstrucao::find($propriedade->faseDeConstrucaoID);
                $propriedade->estadoDeConservacaoID = EstadoDeConservacao::find($propriedade->estadoDeConservacaoID);
            }
            return view('propriedades.arrendar', compact('propriedades'));

    }

/*     // listar cidades para o query
    public function listarCidades()
    {
        $propriedades = Propriedade::where( 'cidade', 'Coimbra')->get();

        foreach($propriedades as $propriedade){
            $propriedade->cidade = Propriedade::find($propriedade->cidade);
            $propriedade->tipoDePropriedadeID = TipoDePropriedade::find($propriedade->tipoDePropriedadeID);
            $propriedade->estadoJuridicoID = EstadoJuridico::find($propriedade->estadoJuridicoID);
            $propriedade->faseDeConstrucaoID = FaseDeConstrucao::find($propriedade->faseDeConstrucaoID);
            $propriedade->estadoDeConservacaoID = EstadoDeConservacao::find($propriedade->estadoDeConservacaoID);
        }

        return view('propriedades.comprar', compact('propriedades'));
    } */

    // Ficha individual de cada propriedade
    public function propriedadeindividual()
    {
        /* $propriedades = Propriedade::orderBy('id')->get();

        //precurrer todas as Propriedades
        foreach($propriedades as $propriedade){
            $propriedade->tipoDePropriedadeID = TipoDePropriedade::find($propriedade->tipoDePropriedadeID);
            $propriedade->estadoJuridicoID = EstadoJuridico::find($propriedade->estadoJuridicoID);
            $propriedade->faseDeConstrucaoID = FaseDeConstrucao::find($propriedade->faseDeConstrucaoID);
            $propriedade->estadoDeConservacaoID = EstadoDeConservacao::find($propriedade->estadoDeConservacaoID);
            $propriedade->fotografias = Fotografia::find($propriedade->id);
            //$propriedade->fotografias = Fotografia::find($propriedade->fotografias);
            //$propriedade->fotografias = Propriedade::find($propriedade->fotografias);

        }

        return view('propriedades.propriedadeindividual', compact('propriedades')); */

        $fotografias = Fotografia::orderBy('id')->get();
        $a = 4;
        //$propriedadeIDSelect = 3;
        $fotografiasSelect = array();
        //precurrer todas as Fotografias
        /* foreach($fotografias as $fotografia){
            if ($fotografia->propriedadeID == $propriedadeIDSelect){

                $fotografia->propriedadeID = Fotografia::find($fotografia->propriedadeID);

            clock()->info("{$a}");
            $a = $a + 1;
            }

         } */
         foreach ($fotografias as $record) {
            $fotografiasSelect[] = array($record['id'] => $record['id']);
            clock()->info("{$a}");
                $a = $a + 1;
         }


        //clock()->info("{$fotografiasSelect}");

        // echo ($fotografias. "dentro fotografia controller <br>");
        //echo ("dentro fotografia controller <br>");

        return view('propriedades.propriedadeindividual', compact('fotografias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
