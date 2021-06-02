<?php

namespace App\Http\Controllers;

use App\Models\Albaran;
use App\Models\AlbaranAlimento;
use App\Models\Alimento;
use Illuminate\Http\Request;

class AlbaranAlimentoController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$albaranes = Albaran::all();


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Albaran $id)
    {   
        $alimentos = Alimento::all();

        return view ('alimentos.meterAlimento', ['alimentos' => $alimentos, 'albaran' => $id->Id_albaran]);

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
            'Id_alimento' => 'required',
            'Cantidad' => 'required',
            'albaran' => 'required',
        ]);

        AlbaranAlimento::create([
            'Id_albaran' => $request->albaran,
            'Id_alimento' => $request->Id_alimento,
            'Cantidad' => $request->Cantidad,

        ]);

        return redirect()->back();
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
    public function edit()
    {
        return view('albaranes.edit');
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
