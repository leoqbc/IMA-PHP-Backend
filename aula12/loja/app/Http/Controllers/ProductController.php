<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function form()
    {
        return view('cadastra_produto');
    }

    public function create(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->category = $request->input('category');
        $product->price = $request->input('price');
        $product->profile = 'nao-tem';

        if ($product->save() === true) {
            return 'Cadastro feito com sucesso';
        }
    }
}
