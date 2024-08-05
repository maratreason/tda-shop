<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function category() {
        return view('category');
    }

    public function categoryDetail($category) {
        return view('category-detail', compact('category'));
    }

    public function product($category, $product = null) {
        return view('product', compact('category', 'product'));
    }
}
