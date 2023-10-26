<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// procura por uma tabela chamada: products
class Product extends Model
{
    // quando o nome da tabela é diferente
    // configuração de nome de tabela
    // protected $table = 'tbl_products';

    use HasFactory;

    // São os campos da tabela
    // que podem ser armazenados diretamente
    // no (construtor) model
    protected $fillable = [
        'name', 
        'description', 
        'category', 
        'price',
        'profile'
    ];


    // Vamos criar um mutator para alterar a URL quando
    // for solicitada

    public function profile(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => url($value)
        );
    }
}
