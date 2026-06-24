<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller
{
    public function index()
    {   
        $categorias = [
            'Mercado',
            'Farmácia',
            'Petshop',
            'estudo',
            'esporte',
        ];
        return view('categories.index', compact('categorias'));
    }

}