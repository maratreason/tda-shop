<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $categories = Category::get();
        return view('index', compact('categories'));
    }

    public function shop() {
        $categories = Category::get();
        return view('index', compact('categories'));
    }

    public function category() {
        $categories = Category::get();
        return view('category', compact('categories'));
    }

    public function categoryDetail($alias) {
        $categories = Category::get();
        $category = Category::where('alias', $alias)->first();
        return view('category-detail', compact('categories', 'category'));
    }

    public function product($category, $product = null) {
        $categories = Category::get();
        return view('product', compact('categories', 'category', 'product'));
    }

    public function basket() {
        return view('basket');
    }

    public function basketPlace() {
        return view('order');
    }
}
