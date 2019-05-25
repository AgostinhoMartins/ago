<?php

namespace App\Http\Controllers;

use App\Propriedade;
use App\TipoDePropriedade;
use App\EstadoJuridico;
use App\FaseDeConstrucao;
use App\EstadoDeConservacao;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

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
        }
        return view('propriedades.index', compact('propriedades'));
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
