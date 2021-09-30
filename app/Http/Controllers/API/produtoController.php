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
        return response()->json(produto::all());
    }

    public function store(Request $request)
    {
      Produto::create($request->all());
    }

    
    public function show($id)
    { 
        return response()->json(produto::findOrfail($id));   
    }

    public function update(Request $request, $id)
    {
        $produto = produto::findorfail($id);
        $produto->update($request->all());
    }

    public function destroy($id)
    {
        $produto = produto::findorfail($id);
        $produto->delete();
    }
}