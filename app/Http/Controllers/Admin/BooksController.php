<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Categories;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $books = Book::join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.id as id','books.name as name', 'categories.name as category_name', 'books.quantity as quantity', 'books.price as price', 'books.author as author')
            ->get();
        return view('pages.books.index', compact('user', 'books'));
    }
    public function create(){
        $user = auth()->user();
        $categories = Categories::all();
        return view('pages.books.create',compact('user', 'categories'));
    }

    public function store(Request $request){

        if ($request->image) {
            $image_name = time() . "." . $request->image->getClientOriginalExtension();
            $request->image->storeAs('media/events/', $image_name, 'public');
        }

        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'description' => 'required',
            'image' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);

        Book::create([
            'name' => $request->name,
            'author' => $request->author,
            'description' => $request->name,
            'image' => $image_name,
            'quantity' => (int)$request->quantity,
            'price' => (int)$request->price,
            'category_id' => (int)$request->category_id,
        ]);
        return redirect()->route('admin.books');
    }

    public function edit($id){
        $user = auth()->user();

        $category = Categories::find($id);
        return view('pages.books.edit',compact('user','category'));
    }
    public function update($id, Request $request)
    {
        $category = Categories::find($id);
        $request->validate([
            'name' => 'required',
        ]);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('admin.books');
    }
}
