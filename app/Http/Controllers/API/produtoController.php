<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(produto::all());
    }

    public function store(Request $request)
    {
      produto::create($request->all());
    }

    
    public function show($id)
    {
        return produto::findOrfail($id);
    }

    public function update(Request $request, produto $produto)
    {
        $produto = produto::findOrfail($id);
        $produto->update($request->all());
    }

    public function destroy($id)
    {
        $produto = produto::findOrfail($id);
        $produto->delete();
    }
}