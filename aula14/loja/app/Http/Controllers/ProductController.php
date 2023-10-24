<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function form()
    {
        return view('cadastra_produto');
    }

    public function front()
    {
        return view('front_products');
    }

    public function create(Request $request)
    {
        $product = new Product($request->all());

        // response json 
        // response()->json([], 201);

        if ($product->save() === true) {
            return response()->json($product, 201);
        }
        return response()->json(["error" => "Erro ao cadastrar"], 400);
    }

    public function getProduct(int $id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function getAll(Request $request)
    {
        // se tem: ?category=valor
        $category = $request->input('category');

        // se tem: ?name=valor
        $name = $request->input('name');

        if ($category) {
            $products = Product::where('category', $category)->get();
        } elseif ($name) {
            $products = Product::where('name', $name)->get();
        } else {
            $products = Product::all();
        }

        return response()->json($products);
    }

    public function update(int $id, Request $request)
    {
        // Conceito do PUT em Rest, é subistituir
        $product = Product::findOrFail($id);

        // Estamos preenchendo o que veio da request
        // no produtos que selecionamos pelo ID
        $product->fill($request->all());

        if ($product->save()) {
            return response()->json($product, 202);
        }
        return response('Erro ao atualizar', 400);
    }

    public function delete(int $id)
    {
        // faz a exclusão do produto
    }

    public function uploadProfile(Request $request)
    {
        // Para encontrar a imagem, rodar:
        // php artisan storage:link

        // se há um arquivo no campo "profile"
        if ($request->hasFile('profile')) {
            // .png | .jpg | .jpeg 
            $extensao = $request->file('profile')->extension();
            
            // storePubliclyAs armazena o arquivo temporario na pasta informada
            // na área pública: pasta "public" do projeto
            $nomeArquivo = uniqid();
            $path = $request->file('profile')->storePubliclyAs('public/products', "$nomeArquivo." . $extensao);

            // respondemos com um link
            return response()->json([
                'url' => Storage::url($path)
            ]);
        }

        return response('Erro ao salvar a imagem', 400);
    }
}
