<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClienteController extends Controller
{
    //

    public function consulta(){
        $clientes = Cliente::all();
        return $clientes;
    }

    public function consultaById($id){
        $cliente = Cliente::find($id);
        return $cliente;
    }

    public function consultaByName($nome){
        $cliente = Cliente::where('nome', $nome)->get();
        return $cliente;
    }

    public function createCliente(Request $request){


        $cliente = [
            "nome" => $request->input('nome'),
            "telefone" => $request->input('telefone'),
            "qnt_itens_variados" => $request->input('qnt_itens_variados')
        ];

        Cliente::insert($cliente);
        return response()->json($cliente);
    }

    public function updateCliente(Request $request){

        $cliente = ClienteController::consultaById($request['id']);

        $cliente->nome = $request['nome'];
        $cliente->telefone = $request['telefone'];
        $cliente->qnt_itens_variados = $request['qnt_itens_variados'];

        return 201;

    }

    public function deleteCliente(Request $request){

        $cliente = ClienteController::consultaById($request['id']);
        $cliente->delete;

        return 201;
    }

}
