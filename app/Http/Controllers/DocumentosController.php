<?php

namespace App\Http\Controllers;

use App\Models\documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $request->validate([
            'cireg'                 => 'required|image|max:5000',
            'solvencia_academica'   => 'required|image|max:5000',
            'serviciocomunitario'   => 'required|image|max:5000',
            'actapasantias'         => 'required|image|max:5000',
            'certificadopasantias'  => 'required|image|max:5000',
            'defensadegrado'        => 'required|image|max:5000',
            'practicaseducativas'   => 'required|image|max:5000',
            'pasantiashosp'         => 'required|image|max:5000',
            'transladooreingro'     => 'required|image|max:5000',
            'amonestaciones'        => 'required|image|max:5000',
            'fondonegro'            => 'required|image|max:5000',
            'capiatitulo'           => 'required|image|max:5000',
            'copiadenotas'          => 'required|image|max:5000',
            'copiadepartnacimiento' => 'required|image|max:5000',
            'pla_inscripcion'       => 'required|image|max:5000',
            'regmilitar'            => 'required|image|max:5000',
        ]);
        $path1  = $request->file('cireg')->store('documentos');
        $path2  = $request->file('solvencia_academica')->store('documentos');
        $path3  = $request->file('serviciocomunitario')->store('documentos');
        $path4  = $request->file('actapasantias')->store('documentos');
        $path5  = $request->file('certificadopasantias')->store('documentos');
        $path6  = $request->file('defensadegrado')->store('documentos');
        $path7  = $request->file('practicaseducativas')->store('documentos');
        $path8  = $request->file('pasantiashosp')->store('documentos');
        $path9  = $request->file('transladooreingro')->store('documentos');
        $path10 = $request->file('amonestaciones')->store('documentos');
        $path11 = $request->file('fondonegro')->store('documentos');
        $path12 = $request->file('capiatitulo')->store('documentos');
        $path13 = $request->file('copiadenotas')->store('documentos');
        $path14 = $request->file('copiadepartnacimiento')->store('documentos');
        $path15 = $request->file('solvencia_academica')->store('documentos');
        $path16 = $request->file('copiadepartnacimiento')->store('documentos');
        $path17 = $request->file('pla_inscripcion')->store('documentos');
        $path18 = $request->file('regmilitar')->store('documentos');

//valores de status
        //1-pendiente a revisar
        //2-activo
        //cancelado

        $id        = Auth::id();
        $valstatus = 1;
        documentos::create([
            'id_user'             => $id,
            'status'              => 1,
            'sol_academica'       => $path1,
            'rec_academico'       => $path2,
            'cont_culminacionSV'  => $path3,
            'ActEvaPasantias'     => $path4,
            'CertPasantias'       => $path5,
            'ActDefensaTrabGrado' => $path6,
            'ConstPracticas'      => $path7,
            'ActPasantiasHosp'    => $path8,
            'reingresoTrans'      => $path9,
            'RecoAmonestaciones'  => $path10,
            'FondoNegro'          => $path11,
            'copiaTituloB'        => $path12,
            'CopiaSimple'         => $path13,
            'CopiaPnacimiento'    => $path14,
            'PlanillaRusni'       => $path15,
            'PlanilladefensaInt'  => $path16,

        ]);
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function show(documentos $documentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, documentos $documentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(documentos $documentos)
    {
        //
    }

}
