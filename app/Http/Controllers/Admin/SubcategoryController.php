<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;


class SubcategoryController extends Controller
{
    public function index() {

        $subcategories  = Subcategory::with('category')->get();

        return view('admin.pages.subcategory.index', compact('subcategories'));

    }

    public function create() {

        return view('admin.pages.subcategory.create');

    }

    public function store(Request $request) {

        // dd('hello from store');

        $subcategory = new Subcategory; // createing a new object

        // matching the request
        $subcategory->name = $request-> name;
        $subcategory->category_id = $request-> category_id;

        
        //saving the process
        $subcategory->save();

        return redirect('admin/subcategories');

    }


    public function edit(Request $request) {

        $subcategory_id = $request-> subcategory;
        $subcategory = Subcategory::findOrFail($subcategory_id);
        return view('admin.pages.subcategory.edit', compact('subcategory'));


    }

    Public function update(Request $request) {

        $subcategory_id = $request-> subcategory;
        $subcategory = Subcategory::findOrFail($subcategory_id);

        $subcategory->name = $request-> name;
        $subcategory->category_id = $request-> category_id;
        $subcategory->save();

        return redirect('admin/subcategories');

    }

    public function destroy(Request $request) {

        $subcategory_id = $request-> subcategory;
        $subcategory = Subcategory::findOrFail($subcategory_id);
        $subcategory->delete();
        $subcategories = Subcategory::all();
        return redirect()->back();
        return view('admin.pages.subcategory.index', compact('subcategories'));
        
    }
}
