<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VeiculoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos = Veiculo::orderBy('id')->get();
        return view('veiculo.index', compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('veiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Veiculo::create($request->all());

        return redirect('veiculos');
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
        $veiculo = Veiculo::where('id', $id)->first();
        return view('veiculo.edit', ['id' =>  $veiculo->id, 'placa' => $veiculo->placa, 'renavam' => $veiculo->renavam, 'marca' => $veiculo->marca, 'modelo' => $veiculo->modelo, 'ano' => $veiculo->ano, 'cor' => $veiculo->cor]);
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
        $data = $request->all();

        $veiculo = Veiculo::find($id);

        $veiculo->placa = $data['placa'];
        $veiculo->renavam = $data['renavam'];
        $veiculo->marca = $data['marca'];
        $veiculo->modelo = $data['modelo'];
        $veiculo->ano = $data['ano'];
        $veiculo->cor = $data['cor'];

        $veiculo->save();

        return redirect('veiculos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Veiculo::destroy($id);

        return redirect('veiculos');
    }
}