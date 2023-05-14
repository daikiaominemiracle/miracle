<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $categories = Categories::all();
        return view('pages.categories.index', compact('user', 'categories'));
    }

    public function create(){
        $user = auth()->user();
        return view('pages.categories.create',compact('user'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        Categories::create([
            'name' => $request->name
        ]);
        return redirect()->route('admin.categories');
    }

    public function edit($id){
        $user = auth()->user();

        $category = Categories::find($id);
        return view('pages.categories.edit',compact('user','category'));
    }
    public function update($id, Request $request)
    {
        $category = Categories::find($id);
        $request->validate([
            'name' => 'required',
        ]);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('admin.categories');
    }
}
