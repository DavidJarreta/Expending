<?php

namespace App\Http\Controllers;

use App\Models\Albaran;
use App\Models\AlbaranAlimento;
use App\Models\Maquina;
use App\Models\User;
use Illuminate\Http\Request;

class AlbaranesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $albaranes = Albaran::all();
        $maquinas = Maquina::all();
        $alimentos = AlbaranAlimento::all();
        $users = User::all();
        
        return view('albaranes.index', ['maquinas' => $maquinas , 'users' => $users, 'albaranes' => $albaranes, 'alimentos' => $alimentos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $maquinas = Maquina::all();
        $users = User::all();
        return view('albaranes.create', ['maquinas' => $maquinas , 'users' => $users]);
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
            'Id_maquina' => 'required',
            'Id_usuario' => 'required',
            'Estado_maquina' => 'required',
            'Fecha' => 'required',
            'Dinero_recaudado' => 'required',
            'Contador' => 'required',
        ]);

        Albaran::create($request->all());

        return redirect()->back();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
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
    public function destroy(Albaran $albaran)
    {
        
        $albaran = Albaran::findOrFail($albaran->Id_albaran)->delete();
        //$albaran = Albaran::where('Id_albaran', '=', $albaran->Id_albaran)->delete();
        
     
        return redirect()->route('listaAlbaranes');
    }
}
