<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users_count = count(User::all());
        $books_count = count(Book::all());
        $sales_count = count(Sale::all());
        $user = auth()->user();
        return view('home',compact('users_count', 'user', 'books_count', 'sales_count'));
    }
}
