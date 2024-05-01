<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home(){
        $products = Product::with('categories')->get();
        return view('user.home', [
            'titlePage' => 'Home',
            'products' => $products
        ]);
    }

    public function filter($id){
        $category = Category::find($id);
        if (!$category) {
            // abort(404);
            return view('errors.404page');
        }
        $products = Product::with('categories')
            ->whereHas('categories', function ($query) use ($id) {
                $query->where('id', $id);
            })
            ->get();
        return view('user.home', [
            'titlePage' => 'Home',
            'products' => $products
        ]);
    }
    
    public function detail($id){
        $product = Product::find($id);
        if(!$product){
            return view('errors.404page');
        }
        return view('user.detail', [
            'titlePage' => 'Detail',
            'product' => $product
        ]);
    }
}
