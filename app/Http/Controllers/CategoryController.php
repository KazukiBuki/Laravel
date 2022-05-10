<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate(1);
        return view('pages.add-category');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'title'=>'required|unique:posts|max:255', 
        ]);

        Category::create([
            'title'=>request('title')
        ]);
        
        return redirect('/');

    }

    public function showCategories(){
        $categories = Category::paginate(10);
        return view('pages.show-categories', compact('categories'));
    }
}
