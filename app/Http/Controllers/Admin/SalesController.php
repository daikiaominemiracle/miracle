<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $sales = Sale::all();
        return view('pages.sales.index', compact('user', 'sales'));
    }
}
