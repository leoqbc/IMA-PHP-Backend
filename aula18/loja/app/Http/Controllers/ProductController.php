<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;
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
        $busca = $request->input('search');
        $order = $request->input('order');

        // Uma busca em cache
        // if (Cache::has('search', $search)) {
        //     return Cache::get('search');
        // }

        if ($busca) {
            $products = Product::where('name', 'like', "%$busca%")
                               ->orWhere('description', 'like', "%$busca%")
                               ->orWhere('category', 'like', "%$busca%")
                               ->orWhere('price', 'like', "%$busca%")                              
                               ;
        } else {
            // faz o mesmo que Product::all() -> porém não traz ainda os resultados
            $products = Product::where(1, '=', 1);
        }

        if ($order) {
            // valor: {campo}:{ordenacao}
            // orderValues[0] = {campo}
            // orderValues[1] = {ordenacao}
            // desestruturação usando list()
            [$campo, $ordenacao] = explode(':', $order);
            $products->orderBy($campo, $ordenacao);
        }

        // Um exemplo de cache aqui!
        // if (Cache::has('products')) {
        //     $productsDb = Cache::get('products');
        // } else {
        //     // segura o código 5 segundos
        //     // simulamos uma lentidão no banco
        //     sleep(5);
        //     $productsDb = $products->get();
        //     Cache::put('products', $productsDb, 120);
        // }
        
        // return do cache
        // return response()->json($productsDb);

        return response()->json($products->get());
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
        $produto = Product::findOrFail($id);
        if ($produto->delete()) {
            return response()->json([
                'id' => $produto->id,
                'mensagem' => 'Produto excluido com sucesso'
            ], 202);
        }
        return response('Erro ao excluir', 400);
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
