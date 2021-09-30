<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

use Illuminate\Http\Resources\Json\ResourceCollection;

class produtoController extends Controller
{
    
    public function index()
    {
        return response()->json(produto::all()); //retorno de todos os produtos da lista! (get - sem parametro)
    }

    public function store(Request $request)
    {
      Produto::create($request->all()); //criar um produto no banco. (put - com paramestros "nome - reposta", "valor - resposta")
    }

    
    public function show($id)
    { 
        return response()->json(produto::findOrfail($id));   //buscar apenas um id para consulta. (get com produtos/id)
    }

    public function update(Request $request, $id)
    {
        $produto = produto::findorfail($id);         //atualizar algum produto já no banco (put com produtos/id e paramestros "nome - reposta", "valor - resposta")
        $produto->update($request->all());
    }

    public function destroy($id)
    {
        $produto = produto::findorfail($id);    //deletar um produto já no banco (delete com produtos/id)
        $produto->delete();
    }
}