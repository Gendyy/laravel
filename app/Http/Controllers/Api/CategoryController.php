<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {

        $categories  = Category::with('offers')->get();

        // return view('admin.pages.category.index', compact('categories'));

        return response()->json($categories);

    }


    // public function create() {

    //     return view('admin.pages.category.create');

    // }

    public function store(Request $request) {

        // dd('hello from store');
        $category = new Category; // createing a new object

        // matching the request
        $category->name = $request-> name;
        
        //saving the process
        $category->save();

        // return redirect('admin/categories');
        return response()->json($category);


    }


    public function show(Request $request) {

        $category_id = $request-> category;
        $category = Category::findOrFail($category_id);
        // return view('admin.pages.category.show', compact('category'));
        return response()->json($category);


    }


    // public function edit(Request $request) {

    //     $category_id = $request-> category;
    //     $category = category::findOrFail($category_id);
    //     // return view('admin.pages.category.edit', compact('category'));
    //     // return response()->json($category);

    // }

    // Public function update(Request $request) {

    //     $category_id = $request-> category;
    //     $category = Category::findOrFail($category_id);

    //     $category->name = $request-> name;
    //     $category->save();

    //     // return redirect('admin/categories');
    //     return response()->json($category);
    // }

    public function destroy(Request $request) {

        $category_id = $request-> category;
        $category = Category::findOrFail($category_id);
        $category->delete();
        // $categories = Category::all();
        // return redirect()->back();
        // return view('admin.pages.category.index', compact('categories'));
        return response()->json($category);

        
    }
}