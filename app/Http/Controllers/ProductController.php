<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function liste_product()
    {
        $product = Product::paginate(4);
        return view('product.liste',compact('product'));
    }

    public function ajouter_product()
    {
        return view('product.ajouter');
    }

   
}
