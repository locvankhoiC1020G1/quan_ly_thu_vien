<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('home',compact('books'));
    }
}
