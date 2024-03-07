<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.AddCategory');
    }
    public function AllCategorys()
    {
        $categorys = categories::paginate(5); 
        return view('admin.AllCategory', compact('categorys'));    
    }

    /**
     * Show the form for creating a new resource.
     */
//     public function create()
// {
//     // Retrieve all categories from the database
//     $categories = categories::all();
//     return view('organisateur.AddEvent', compact('categories'));
// }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories',
        ]);
        $category = new categories();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('all-categories')->with('success', 'Category created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = categories::findOrFail($id);
        return view('admin.UpdateCategory', compact('category'));
    }
    
    public function update(Request $request, $id)
    {
        $category = categories::findOrFail($id);
        $category->update($request->all());
    
        return redirect()->route('all-categories')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = categories::findOrFail($id);
        $category->delete();

        return redirect()->route('all-categories')->with('success', 'Category deleted successfully.');
    }
}
