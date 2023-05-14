<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('welcome', compact('books'));
    }
}
