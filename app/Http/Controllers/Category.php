<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller
{
    public function index()
    {   
        $categorias = [
            [
            'name' => 'Mercado',
            'type' => 'despesa',
            'description' => 'Gastos com compras de supermercado'
            ],
            
            [
            'name' => 'Restaurante',
            'type' => 'despesa',
            'description' => 'Gastos com refeições fora de casa'
            ],
            
            [
            'name' => 'Transporte',
            'type' => 'despesa',
            'description' => 'Gastos com transporte público ou combustível'
            ],
            
            [
            'name' => 'Salário',
            'type' => 'receita',
            'description' => 'Receita proveniente do salário mensal'
            ],
            
        ];
        return view('categories.index', compact('categorias'));
    }

}