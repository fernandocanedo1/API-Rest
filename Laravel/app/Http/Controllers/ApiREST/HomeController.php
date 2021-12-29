<?php

namespace App\Http\Controllers\ApiREST;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Produto;

class HomeController extends Controller
{
    public function index(){
        $produtos = Produto::all();

        return response()->json([
            'produtos' => $produtos
        ]);
    }
    public function createProduct(Request $request){
        $produtos = new Produto;
        $produtos->cod_produto = $request->cod_produto;
        $produtos->nome = $request->nome;
        $produtos->valor = $request->valor;
        $produtos->estoque = $request->estoque;
        $produtos->save();
    
        return response()->json([
            "message" => "student record created"
        ], 201);
    }
    public function getProduct($id){
        if (Produto::where('id', $id)->exists()) {
            $produtos = Produto::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($produtos, 200);
          } else {
            return response()->json([
              "message" => "Student not found"
            ], 404);
          }
    }
    public function updateProduct(Request $request, $id) {
        if (Produto::where('id', $id)->exists()) {
            $produtos = Produto::find($id);
            $produtos->nome = is_null($request->nome) ? $produto->nome : $request->nome;
            $produtos->cod_produto = is_null($request->cod_produto) ? $produto->cod_produto : $request->cod_produto;
            $produtos->valor = is_null($request->valor) ? $produto->valor : $request->valor;
            $produtos->estoque = is_null($request->estoque) ? $produto->estoque : $request->estoque;
            $produtos->save();
    
            return response()->json([
                "message" => "records updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "Student not found"
            ], 404);
            
        }
    }
  
    public function deleteProduct ($id) {
            if(Produto::where('id', $id)->exists()) {
              $produtos = Produto::find($id);
              $produtos->delete();
      
              return response()->json([
                "message" => "records deleted"
              ], 202);
            } else {
              return response()->json([
                "message" => "Student not found"
              ], 404);
            }
          }
          
}
